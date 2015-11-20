<?php 
class ResourceController extends BaseController{

	public function create()
	{	
		$column_title_id 	= Input::get('column_title_id');
		$file 				= Input::file('image');
		$title 				= Input::get('title');
		$brief 				= Input::get('brief');
		$sequence 			= Input::get('sequence');
		$url 				= Input::get('url');
		//讲照片存入public目录
		$path = public_path().'/upload/offical/';

		//判空
		$arr = array( $column_title_id,$file,$title,$brief,$sequence,$url );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//排序号唯一性
		if( !is_int( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = Resource::select('sequence')->get();
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
		$result = StorageController::storageResource( $column_title_id,$title, $brief, $sequence, $image_url, $url );
		if( !$result )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function delete()
	{
		$resource_id = Input::get('resource_id');
		$resource = Resource::find( $resource_id );
		if( !isset( $resource ) )
			return Response::json( BiaoException::$notExist );
		$resource->delete();
		return Response::json( BiaoException::$ok );
	}

	public function edit()
	{
		$resource_id 	= Input::get('resource_id');
		$file 			= Input::file('image');
		$title 			= Input::get('title');
		$bref 			= Input::get('bref');
		$sequence 		= Input::get('sequence');	
		$url 			= Input::get('url');
		$path 			= '/upload/offical/';

		if(  !empty( $sequence ) )
		{
			if( !is_int( $sequence ) )
				return Response::json( BiaoException::$isNotInt );
		}

		$resource = Resource::find( $resource_id );
		if( !isset( $resource ) )
			return Response::json( BiaoException::$notExist );

		$result = StorageController::storageEditResource($resource,$file,$path,$title,$bref,$sequence,$url,$resource_id);	
		return $result;
	}

	public function index()
	{
		$resources = Resource::all();
		return View::make('')->with([ 'resources'=>$resources ]);
	}
	
}