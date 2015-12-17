<?php 
class WorkController extends BaseController{

	public function add()
	{	
		return View::make('admin.pages.vote.content.add-content')->with([ 'projects' => Project::all() ]);
	}

	public function edit()
	{	
		$work = Work::find( Input::get('work_id') );
		if( !isset($work) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
			
		$projects = Project::all();
		return View::make('admin.pages.vote.content.edit-content')->with(['work'=>$work,'projects'=>$projects]);
	}

	public function manage()
	{		
		$works = Work::all();
		foreach( $works as $work )
			$work->project = Project::find($work->project_id)->title;
		return View::make('admin.pages.vote.content.manage-content')->with(['works'=>$works]);
	}
	
	public function createAndEdit()
	{	
		$project_id = Input::get('project_id');
		$project = Project::find( $project_id );
		if( !isset( $project ) )
			return Response::json( BiaoException::$notExist );

		//编辑or创建？
		if( Input::has('work_id') )
		{
			$work = Work::find( Input::get('work_id') );
			if( !isset($work) )
				return Response::json( BiaoException::$notExist );
		}else{
			$work = new Work;
		}
		$title 			= Input::get('title');
		$url 			= Input::get('url');
		$vote_number 	= Input::get('vote_number');
		// $vote_number = 10;
		$file 			= Input::get('image');

		// //讲照片存入public目录
		// $path = public_path().'/upload/vote/';


		// $fullArr = array( $file,$title,$url );
		// $littleArr = array( $title,$url );
		// $dataPath = '/upload/vote/';
		// $result = FileController::isFileUpload($work,$file,$fullArr,$littleArr,$path,$dataPath);
		// if( $result != 'true' )
		// 	return $result;
		
		$fullArr = array( $file,$title,$url,$vote_number );
		$littleArr = array( $title,$url,$vote_number );
		$result = FileController::isImageUpload($work,$file,$fullArr,$littleArr);
		if( $result != 'true' )
			return $result; 	
		


		if( !empty( $vote_number ) )
		{
			if( !is_numeric( $vote_number ) )
				return Response::json( BiaoException::$isNotInt );
		}

		//存入数据库
		$work->project_id 	= $project_id;
		$work->title 	 	= $title;
		$work->url 			= $url;
		$work->vote_number 	= $vote_number;
		if( !$work->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );

	}

	public function delete()
	{
		$work = Work::find( Input::get('work_id') );
		if( !isset($work) )
			return Response::json( BiaoException::$notExist );
		$work->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		if( Input::has('project_id') )
		{
			$project_id = Input::get('project_id');
			if( !isset( $project ) )
			return Response::json( BiaoException::$notExist );
		}
		
		$project = Project::first();
		if( isset( $project ) )
		{
			$works = Project::where('project_id',$project->id)->get();
		}else{
			$works =array();
		}
		return View::make('')->with(['works'=>$works]);
	}
}