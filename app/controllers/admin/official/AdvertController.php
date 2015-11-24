<?php  
class AdvertController extends Basecontroller{

	public function add()
	{
		return View::make('admin.pages.official.advert.add-advert');
	}

	public function edit()
	{	
		$advert = Advertisement::find( Input::get('advert_id') );
		if( !isset( $advert ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		return View::make('admin.pages.official.advert.edit-advert')->with(['advert'=>$advert]);
	}

	public function manage()
	{	
		$adverts = Advertisement::where('type',1)->get();
		$activity_adverts = ActivityAdvertisement::all();
		return View::make('admin.pages.official.advert.manage-advert')->with(['adverts'=>$adverts,'activity_adverts'=>$activity_adverts]);
	}

	public function createAndEdit()
	{	
		if( Input::has( 'advert_id') )
		{
			$advert = Advertisement::find( Input::get('advert_id') );
			if( !isset( $advert ))
				return Response::json( BiaoException::$notExist );
		}else{
			$advert = new Advertisement;
		}
		$file 		= Input::file('image');
		$title 		= Input::get('title');
		$sequence 	= Input::get('sequence');
		// $sequence = 0;
		$url 		= Input::get('url');
		$type 		= Input::get('type');//1=微官网广告,2=微投票广告，3=微相册广告
		// $type = 2;
		//讲照片存入public目录
		$path = public_path().'/upload/official/';
		
		//判空
		$arr = array( $file,$title,$url,$type );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//序号唯一性检查
		if( !is_numeric( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = Advertisement::where('type',$type)->select('id','sequence')->get();
		if( InputController::isNotUnique($advert->id,$sequence,$sequences ) )
			return Response::json( BiaoException::$isNotUnique );
		//广告类型
		if( $type != 1 && $type != 2 && $type != 3)
			return Response::json( BiaoException::$advertTypeErr );

		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		$image_url = '/upload/official/'.$image_url;
		if( empty( $sequence ) )
			$sequence = null;

		$advert->title 		= $title;
		$advert->sequence 	= $sequence;
		$advert->image_url 	= $image_url;
		$advert->url 		= $url;
		$advert->type 		= $type;
		if( !$advert->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function delete()
	{
		$advert_id = Input::get('advert_id');
		$advert = Advertisement::find( $advert_id );
		if( !isset( $advert ) )
			return Response::json( BiaoException::$notExist );
		$advert->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{

	}
}