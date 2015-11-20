<?php  
class AdsController extends Basecontroller{

	public function create()
	{
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
			
		//讲照片存入public目录
		$path = public_path().'/upload/offical/';
		
		//判空
		$arr = array( $file,$title,$sequence,$url );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//序号唯一性检查
		if( !is_int( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = Advertisement::where('type',1)->select('sequence')->get();
		if( InputController::isNotUnique( $sequence,$sequences ) )
			return Response::json( BiaoException::$isNotUnique );
		
		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		$image_url = '/upload/offical/'.$image_url;
		if( empty( $sequence ) )
			$sequence = null;

		//存入数据库
		$result = StorageController::storageAds( $title, $sequence, $image_url, $url, 1 );
		if( !$result )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function delete()
	{
		$ads_id = Input::get('ads_id');
		$ads = Advertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$ads->delete();
		return Response::json( BiaoException::$ok );
	}

	public function edit()
	{
		$ads_id 	= Input::get('ads_id');
		// $ads_id = 5;
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$sequence 	= Input::get('sequence');
		// $sequence = 1;
		$url 		= Input::get('url');
		$type 		= Input::get('type');
		$path 		= '/upload/offical/';

		if( !empty($sequence) )
		{
			if( !is_int( $sequence ) )
				return Response::json( BiaoException::$isNotInt );
		}

		$ads = Advertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$result = StorageController::storageEditAds($ads,$file,$path,$title,$sequence,$url,$type,$ads_id);	
		return $result;
	}

}