<?php 

class FontendController extends BaseController{
	/**
	*	检查是否已设置cookie
	*	
	*	@return \Symfony\Component\HttpFoundation\Cookie
	*/
	public function isSetVoteSession()
	{
		if( !Session::has('vote') )
		{	
			$session = Session::put( 'vote',json_encode(array( ) ) );
		}
	}

	//投票
	public function vote()
	{
		$project_id 	= Input::get('project_id');
		$work_id 		= Input::get('work_id');

		$project = Project::find($project_id);
		if( !isset( $project ) )
			return Response::json( BiaoException::$noProject );

		$work = Work::find($work_id);
		if( !isset( $work ) )
			return Response::json( BiaoException::$noWork );

		if( $work->project_id != $project_id )
			return Response::json(BiaoException::$workIsNotInThisProject);


		$this->isSetVoteSession();
		$vote = json_decode( Session::get('vote'),true );
		if( isset( $vote[ $project_id ] ) )
		{	
			return Response::json(BiaoException::$voted);
		}
		$vote[$project_id] = $work_id;
		Session::put('vote',json_encode( $vote ) );
		try{
			DB::transaction( function()use( $project,$work ) {
				$project->vote_total += 1;
				$project->save();

				$work->vote_number += 1;
				$work->save(); 
			});
		}catch( Exception $e ) {
			return Response::json( BiaoException::$databaseErr );
		}
		return Response::json(BiaoException::$ok);

	}

	//分页函数
	public static function page($per_page,$page,$array_data)
	{
		//根据数据库的数据算出总的条数
		$total_count = count($array_data);
		// dd($total_count);
		//总的页数
		$total_page = ceil($total_count/$per_page);
		//除数检查
		if($per_page <= 0)
			return array();

		//截取需要的数据
		if($page>$total_page)
			return array();

		//第一条数据的索引
		$first =  ($page-1)*$per_page;
		//最后一条的数据,需要判断是否超过了最大值
		$last = ($first+$per_page-1)>($total_count-1) ? ($total_count-1):($first+$per_page-1);

		$data_need = array();
		for($i= $first; $i<($last+1); $i++)
		{
			array_push($data_need, $array_data[$i]);
		}

		return array( 'arr'=>$data_need,'total_page'=>$total_page );
	}

	//首页分页
	public function homePagination()
	{
		$column_title_id = Input::get('column_title_id');
		$page 			 = Input::get('page');
		if( !is_numeric($page) )
			return Response::json( BiaoException::$isNotInt );

		$resource = Resource::where('column_title_id',$column_title_id)
							->orderBy('sequence','desc')
							->select('title','brief','image_url','url')
							->get();

		$data = $this->page(3,$page,$resource);
		return Response::json(['errCode'=>0,'data'=>$data['arr'],'total_page'=>$total_page]);
	}

	//投票分页
	public function votePagination()
	{
		$project_id 	= Input::get('project_id');
		$page 			= Input::get('page');
		$sequence_type 	= Input::get('sequence_type'); //1=最新项目，2=人气项目
		if( !is_numeric($page) )
			return Response::json( BiaoException::$isNotInt );
		if( $sequence_type != 1 && $sequence_type != 2 )
			return Response::json( BiaoException::$sequenceTypeWrong );
		if( $sequence_type == 1 )
			$works	= Work::where('project_id',$project->id)->orderBy('created_at','desc')->get(); 
		if( $sequence_type == 2 )
			$works	= Work::where('project_id',$project->id)->orderBy('vote_number','desc')->get(); 


		$data = $this->page(4,$page,$work);
		return Response::json(['errCode'=>0,'data'=>$data['arr'],'total_page'=>$total_page]);
	}


	//微相册分页
	public function albumPagination()
	{
		$album	 = Album::where('type',1)->orderBy('sequence','desc')->get();
		$video 	 = Video::where('type',2)->orderBy('sequence','desc')->get();
		$page 			= Input::get('page');
		if( !is_numeric($page) )
			return Response::json( BiaoException::$isNotInt );

		$album_data = $this->page(2,$page,$album);
		$video_data = $this->page(2,$page,$video);

		return Response::json([ 
							'errCode'		=>0,
							'album_data'	=>$album_data['arr'],
							'album_total' 	=> $album_data['total_page'],
							'video_data' 	=> $video_data['arr'],
							'video_total'	=> $video_data['total_page']
 							]);
	}

	//微相册详细
	public function albumDetail()
	{
		$album_id = Input::get('album_id');
		$photos = Photograph::where('album_id',$album_id)->get();
		if( count( $photos ) == 0 )
			return Response::json( BiaoException::$noContent );

		return Response::json([ 'errCode'=>0,'data'=>$photos ]);
	}

	public function resource()
	{
		$column_title_id = Input::get('column_title_id');
		$resources 		 = Resource::where('column_title_id', $column_title_id)->take(3)->get();
		if( count( $resources )  == 0 )
			return Response::json( BiaoException::$notExist );
		return Response::json(['errCode'=>'0','resources'=> $resources]);
	} 

}
