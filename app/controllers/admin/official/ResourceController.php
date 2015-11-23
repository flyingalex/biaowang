<?php 
class ResourceController extends BaseController{

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
		if( Input::has( 'resource_id') )
		{
			$resource = Resource::find( Input::get('resource_id') );
			if( !isset( $resource ))
				return Response::json( BiaoException::$notExist );
		}else{
			$resource = new Resource;
		}
		$column_title_id 	= Input::get('column_title_id');
		$file 				= Input::file('image');
		$title 				= Input::get('title');
		$brief 				= Input::get('brief');
		$sequence 			= Input::get('sequence');
		$url 				= Input::get('url');
		//讲照片存入public目录
		$path = public_path().'/upload/offical/';

		//判空
		$arr = array( $column_title_id,$file,$title,$brief,$url );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		//排序号唯一性
		if( !is_int( $sequence ) )
			return Response::json( BiaoException::$isNotInt );
		$sequences = Resource::select('id','sequence')->get();
		if( InputController::isNotUnique($resource->id,$sequence,$sequences ) )
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
		$resource->column_title_id 	= $column_title_id;
		$resource->title 			= $title;
		$resource->brief 			= $brief;
		$resource->sequence 		= $sequence;
		$resource->image_url 		= $image_url;
		$resource->url 				= $url;
		if( !$resource->save())
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

	public function index()
	{
		$resources = Resource::all();
		return View::make('')->with([ 'resources'=>$resources ]);
	}
	
}