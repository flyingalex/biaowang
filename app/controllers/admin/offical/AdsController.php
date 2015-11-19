<?php  
class AdsController extends Basecontroller{

	public function create()
	{
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
		if( empty( $title ) )
			return Response::json( BiaoException::$noTitle );
		if( empty( $url ) )
			return Response::json( BiaoException::$noUrl );
		if( InputController::isNotInt( $sequence ) )
				return Response::json( BiaoException::$isNotInt );

		$path = public_path().'/upload/offical/ads/';
		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		$image_url = '/upload/offical/ads/'.$image_url;
		$result = StorageController::storageAds( $title, $sequence, $image_url, $url, 1 );
		if( !$result )
			return Response::json( BiaoException::$databaseErr );
	}

	public function delete()
	{
		$ads_id = Input::put('ads_id');
		$ads = Advertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$ads->delete();
		return Response::json( BiaoException::$ok );
	}

	public function edit()
	{
		$ads_id = Input::get('ads_id');
		$ads = Advertisement::find( $ads_id );
		if( !isset( $ads ) )
			return Response::json( BiaoException::$notExist );
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$sequence 	= Input::get('sequence');
		$url 		= Input::get('url');
		$type 		= 1;
		$path 		= '/upload/offical/ads/';

		$result = StorageController::storageEditAds($ads,$file,$path,$title,$sequence,$url,$type);	
		return $result;
	}

	public function index()
	{
		$ads = Advertisement::where('type',1)->get();
		return View::make('')->with([ 'ads'=>$ads ]);
	}
}