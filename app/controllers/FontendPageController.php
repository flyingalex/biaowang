<?php  

class FontendPageController extends BaseController{

	//官网首页
	public function home()
	{
		$news 			= New::all();//新闻
		$ads 			= Advertisement::where('type',1)->get(); 
		$activity_ads 	= ActivityAdvertisement::all();	
		$column_title  	= ColumnTitle::all();
		$resource 		= Resource::where('column_title_id',1)->select('title','brief','image_url','url')->take(3)->get();
		$titles 		= Title::all();	
		return View::make('home')->with([
						'news'			=>$news,
						'ads'			=> $ads,
						'activity_ads'	=> $activity_ads,
						'titles'		=> $titles,
						'column_title'	=> $column_title,
						'resource'		=> $resource
						]);
	}

	//微投票
	public function vote()
	{
		$ads 	 = Advertisement::where('type',2)->get(); 
		$project = Project::where('display','true')
					->select('sign_up_total','vote_total','view_total','title','vote_close','content')
					->first();

		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		$project->view_total += 1;
		$project->save();

		$works	= Work::where('project_id',$project->id)->orderBy('created_at','desc')->take(4)->get(); 
		
		return View::make('vote')->with([
							'ads'		=> $ads,
							'project'	=> $project,
							'works'		=> $works
							]);
	}

	//活动规则	
	public function rule()
	{
		$project_id = Input::get('project_id');
		$ads 	 	= Advertisement::all(); 
		$project 	= Project::where('display','true')
					->where('id',$project_id)
					->select('sign_up_start','sign_up_stop','vote_start','vote_stop','content')
					->first();

		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		
		return View::make('rule')->with([
					'ads'		=>$ads,
					'project'	=>$project
					]);
	}

	//奖项设置
	public function award()
	{
		$ads 	 = Advertisement::all(); 
		$project = Project::where('display','true')
					->select('award_site')
					->first();
		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		
		return View::make('rule')->with([
					'ads'		=>$ads,
					'project'	=>$project
					]);
	}

	//微相册
	public function album()
	{
		$ads 	 = Advertisement::where('type',3)->get(); 
		$album	 = Album::where('type',1)->orderBy('sequence','desc')->take(2)->get();
		$video 	 = Video::where('type',2)->orderBy('sequence','desc')->take(2)->get();
		return View::make('album')->with([
					'ads'		=>$ads,
					'album'		=>$album,
					'video'		=>$video
					]);
	}


	//相册
	public function subAlbum()
	{
		$album_id 	= Input::get('album_id');
		$photograph = Photograph::where('album_id',$album_id)->get();
		return View::make('sub-album')->with([
					'photos'=>$photograph
					]);
	}


}

