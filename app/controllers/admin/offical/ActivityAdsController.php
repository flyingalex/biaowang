<?php 
class ActivityAdsController extends BaseController{

	public function create()
	{
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$subtitle 	= Input::get('subtitle');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
		//讲照片存入public目录
		$path = public_path().'/upload/offical/';

		//判空
		$arr = array( $file,$title,$subtitle,$sequence,$url );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//排序号唯一性
		if( !is_int( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = Advertisement::where('type',2)->select('sequence')->get();
		if( InputController::isNotUnique( $sequence,$sequences ) )
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

		//存入数据库
		$result = StorageController::storageActivityAds( $title, $subtitle, $sequence, $image_url, $url );
		if( !$result )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function delete()
	{
		$ads_id = Input::get('ads_id');
		$ads = ActivityAdvertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$ads->delete();
		return Response::json( BiaoException::$ok );
	}

	public function edit()
	{	
		$ads_id 	= Input::get('ads_id');
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$subtitle 	= Input::get('subtitle');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
		$path 		= '/upload/offical/';

		if( !empty($sequence) )
		{
			if( !is_int( $sequence ) )
				return Response::json( BiaoException::$isNotInt );
		}

		$ads = ActivityAdvertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );

		$result = StorageController::storageEditActivityAds($ads,$file,$path,$title,$subtitle,$sequence,$url,$ads_id);	
		return $result;
	}

}