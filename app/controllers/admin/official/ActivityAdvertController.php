<?php 
class ActivityAdvertController extends BaseController{

	public function add()
	{
		return View::make('admin.pages.official.advert.add-activity-advert');
	}

	public function edit()
	{
		$activity_id = Input::get('activity_id');
		$activity_advert = ActivityAdvertisement::find( $activity_id );
		if( !isset( $activity_advert ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		return View::make('admin.pages.official.advert.edit-activity-advert')->with(['activity_advert'=>$activity_advert]);
	}

	public function manage()
	{
		
	}

	public function createAndEdit()
	{	
		if( Input::has( 'activity_id') )
		{
			$activity_advert = ActivityAdvertisement::find( Input::get('activity_id') );
			if( !isset( $activity_advert ))
				return Response::json( BiaoException::$notExist );
		}else{
			$activity_advert = new ActivityAdvertisement;
		}
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$subtitle 	= Input::get('subtitle');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
		//讲照片存入public目录
		$path = public_path().'/upload/official/';
		
		$fullArr = array( $file,$title,$subtitle,$url );
		$littleArr = array( $title,$subtitle,$url );
		$dataPath = '/upload/official/';
		$result = FileController::isFileUpload($activity_advert,$file,$fullArr,$littleArr,$path,$dataPath);
		if( $result != 'true' )
			return $result;

		//排序号唯一性
		if( !is_numeric( $sequence ) )
		{
			return Response::json( BiaoException::$isNotInt );
		}{
			$sequences = ActivityAdvertisement::select('id','sequence')->get();
			if( InputController::isNotUnique($activity_advert->id,$sequence,$sequences ) )
				return Response::json( BiaoException::$isNotUnique );
		}
		
		if( empty( $sequence ) )
			$sequence = null;

		$activity_advert->title 		= $title;
		$activity_advert->sub_title 	= $subtitle;
		$activity_advert->sequence 		= $sequence;
		$activity_advert->url 			= $url;
		if( !$activity_advert->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function delete()
	{
		$ads_id = Input::get('activity_id');
		$ads = ActivityAdvertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$ads->delete();
		return Response::json( BiaoException::$ok );
	}

}