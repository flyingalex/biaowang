<?php 
class ProjectController extends BaseController{

	public function add()
	{

	}

	public function edit()
	{
		
	}

	public function manage()
	{
		
	}

	
	public function createAndEdit()
	{	
		if( Input::has('project_id') )
		{
			$project = Project::find( Input::get('project_id') );
			if( !isset($project) )
				return Response::json( BiaoException::$notExist );
		}else{
			$project = new Project;
		}
		$title 			= Input::get('title');
		$content 		= Input::get('content');
		$sign_up_start 	= Input::get('sign_up_start');
		$sign_up_stop 	= Input::get('sign_up_stop');
		$vote_start 	= Input::get('vote_start');
		$vote_stop 		= Input::get('vote_stop');
		$activity_rule 	= Input::get('activity_rule');
		$award_site 	= Input::get('award_site');

		//判空
		$arr = array( 	$title,$content,
						$sign_up_start,$sign_up_stop,
						$vote_start,$vote_stop,
						$activity_rule,$award_site );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );

		//对时间格式作判断
		$time = array( $sign_up_start, $sign_up_stop, $vote_start, $vote_stop);
		if( !InputController::isPregMatch( $time ) )
			return Response::json( BiaoException::$regularNotMatch );

		//对一对时间做判断
		if( !InputController::isTimeSetRight( $sign_up_start,$sign_up_stop ) )
			return Response::json( BiaoException::$dateWrong );	
		if( !InputController::isTimeSetRight( $vote_start,$vote_stop ) )
			return Response::json( BiaoException::$dateWrong );	

		//存储到数据库
		$project->title 		= $title;
		$project->content 		= $content;
		$project->sign_up_start = $sign_up_start;
		$project->sign_up_stop	= $sign_up_stop;
		$project->vote_start 	= $vote_start;
		$project->vote_stop 	= $vote_stop;
		$project->activity_rule = $activity_rule;
		$project->award_site 	= $award_site;
		if( !$project->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );		

	}

	public function delete()
	{
		$project = Project::find( Input::get('project_id') );
		if( !isset( $project ) )
			return Response::json( BiaoException::$notExist );
		$project->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$projects = Project::select('id','title','sign_up_total','vote_total')->get();
		return View::make('')->with(['projects'=>$projects]);
	}

	//显示
	public function display()
	{
		$project_id = Input::get('project_id');
		$project = Project::find( $project_id );
		if( !isset( $project ) )
			return Response::json( BiaoException::$notExist );
		
		if( !$project->display )
		{
			$projects = Project::all();
			foreach( $projects as $pro )
			{
				if( $pro->display == true )
					return Response::json( BiaoException::$displayStatusHasTrue );
			}
			$project->display = true;
		}else{
			$project->display = false;
		}
		if( !$project->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

}
