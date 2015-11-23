<?php 
class ActivityAdvertController extends BaseController{

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
		$path = public_path().'/upload/offical/';
		//判空
		$arr = array( $file,$title,$subtitle,$url );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//排序号唯一性
		if( !is_int( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = ActivityAdvertisement::select('id','sequence')->get();
		if( InputController::isNotUnique($activity_advert->id,$sequence,$sequences ) )
			return Response::json( BiaoException::$isNotUnique );
		//存文件
		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		
		$image_url = '/upload/offical/'.$image_url;
		if( empty( $sequence ) )
			$sequence = null;

		$activity_advert->title 		= $title;
		$activity_advert->sub_title 	= $subtitle;
		$activity_advert->sequence 		= $sequence;
		$activity_advert->image_url 	= $image_url;
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