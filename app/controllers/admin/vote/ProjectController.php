<?php 
class ProjectController extends BaseController{

	public function create()
	{
		$title 			= Input::get('title');
		$content 		= Input::get('content');
		$sign_up_start 	= Input::get('sign_up_start');
		$sign_up_stop 	= Input::get('sign_up_stop');
		$vote_start 	= InputL::get('vote_start');
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
		$time = array( $vote_close, $sign_up_start, $sign_up_stop, $vote_start, $vote_stop);
		if( !InputController::isPregMatch( $time ) )
			return Response::json( BiaoException::$regularNotMatch );

		//对一对时间做判断
		



	}

	public function delete()
	{

	}

	public function edit()
	{

	}

	public function index()
	{
		
	}
}