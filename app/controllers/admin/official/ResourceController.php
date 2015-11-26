<?php 
class ResourceController extends BaseController{

	public function add()
	{	
		$column_titles 	= ColumnTitle::all();
		return View::make('admin.pages.official.resource.add-resource')
							->with(['column_titles'	=>$column_titles]);
	}

	public function edit()
	{	
		$resource_id = Input::get('resource_id');
		//$resource_id = 2;
		$resource = Resource::find( $resource_id );
		if( !isset( $resource ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		$column_titles 	= ColumnTitle::all();
		return View::make('admin.pages.official.resource.edit-resource')
							->with([
								'resource'=>$resource,
								'column_titles'	=>$column_titles
								]);
	}

	public function manage()
	{	
		if( Input::has('column_title_id') )
		{
			$column_title_id = Input::get('column_title_id');
			$column_title = ColumnTitle::find( $column_title_id );
			if( !isset( $column_title ) )
				return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		}else{
			$column_title = ColumnTitle::first();
			if( !isset( $column_title ) )
			{
				$column_title_id = null;
			}else{
				$column_title_id = $column_title->id;
			}
		}
		$resources 		= Resource::where('column_title_id',$column_title_id)->get();
		$column_titles 	= ColumnTitle::all();
		return View::make('admin.pages.official.resource.manage-resource')
						->with([
							'resources'			=>$resources,
							'column_titles'		=>$column_titles,
							'column_title_id' 	=> $column_title_id
							]);
	}
	
	public function createAndEdit()
	{	
		$column_title_id 	= Input::get('column_title_id');
		$column_title = ColumnTitle::find( $column_title_id );
		if( !isset( $column_title ) )
			return Response::json( BiaoException::$notExist );

		if( Input::has( 'resource_id') )
		{
			$resource = Resource::find( Input::get('resource_id') );
			if( !isset( $resource ))
				return Response::json( BiaoException::$notExist );
		}else{
			$resource = new Resource;
		}
		$file 				= Input::file('image');
		$title 				= Input::get('title');
		$brief 				= Input::get('brief');
		$sequence 			= Input::get('sequence');
		$url 				= Input::get('url');
		//讲照片存入public目录
		$path = public_path().'/upload/official/';


		$fullArr = array( $file,$title,$brief,$url );
		$littleArr = array( $title,$brief,$url );
		$dataPath = '/upload/album/';
		$result = FileController::isFileUpload($resource,$file,$fullArr,$littleArr,$path,$dataPath);
		if( $result != 'true' )
			return $result;
		
		//排序号唯一性
		if( !is_numeric( $sequence ) )
		{
			return Response::json( BiaoException::$isNotInt );
		}else{
			$sequences = Resource::select('id','sequence')->get();
			if( InputController::isNotUnique($resource->id,$sequence,$sequences ) )
				return Response::json( BiaoException::$isNotUnique );
		}
		
		if( empty( $sequence ) )
			$sequence = null;

		//存入数据库
		$resource->column_title_id 	= $column_title_id;
		$resource->title 			= $title;
		$resource->brief 			= $brief;
		$resource->sequence 		= $sequence;
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