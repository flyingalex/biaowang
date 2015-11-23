<?php 
 class VideoController extends BaseController{

 	public function add()
	{
		return View::make('admin.pages.album.video.add-video');
	}

	public function edit()
	{	
		// $video = Video::find( Input::get('video_id') );
		$video = Video::find( 2 );
		if( !isset( $video ) )
			return Response::json( BiaoException::$notExist );
		return View::make('admin.pages.album.video.edit-video')->with(['video'=>$video]);
	}

	public function manage()
	{	
		$videos = Video::all();
		return View::make('admin.pages.album.video.manage-video')->with(['videos'=>$videos]);
	}

 	public function createAndEdit()
	{
		if( Input::has('video_id') )
		{
			$video = Video::find( Input::get('video_id') );
			if( !isset($video) )
				return Response::json( BiaoException::$notExist );
		}else{
			$video = new Video;
		}

		$title 	= Input::get('title');
		$url 	= Input::get('url');
		$file 	= Input::file('image');

		//讲照片存入public目录
		$path = public_path().'/upload/album/';

		//判空
		$arr = array( $title,$url,$file );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );

		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		$image_url = '/upload/album/'.$image_url;

		$video->title = $title;
		$video->url = $url;
		$video->image_url = $image_url;
		if( !$video->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );		

	}

	public function delete()
	{
		$video = Video::find( Input::get('video_id') );
		if( !isset( $video ) )
			return Response::json( BiaoException::$notExist );
		$video->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$videos = Video::all();
		return View::make('')->with(['videos'=>$vedios]);
	}
 }