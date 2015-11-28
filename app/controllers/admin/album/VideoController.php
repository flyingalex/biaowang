<?php 
 class VideoController extends BaseController{

 	public function add()
	{
		return View::make('admin.pages.album.video.add-video');
	}

	public function edit()
	{	
		$video = Video::find( Input::get('video_id') );
		// $video = Video::find( 2 );
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
		$file 	= Input::get('image');

		// //讲照片存入public目录
		// $path = public_path().'/upload/album/';

		// $fullArr = array( $title, $file,$url );
		// $littleArr = array( $title, $url);
		// $dataPath = '/upload/album/';
		// $result = FileController::isFileUpload($video,$file,$fullArr,$littleArr,$path,$dataPath);
		// if( $result != 'true' )
		// 	return $result;
		$fullArr = array( $file,$title,$url );
		$littleArr = array( $title,$url );
		$result = FileController::isImageUpload($video,$file,$fullArr,$littleArr);
		if( $result != 'true' )
			return $result; 	
		

		$video->title = $title;
		$video->url = $url;
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