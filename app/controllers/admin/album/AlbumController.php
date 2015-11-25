<?php 
class AlbumController extends BaseController{

	public function add()
	{
		return View::make('admin.pages.album.album.add-album');
	}

	public function edit()
	{	
		$album = Album::find( Input::get('album_id') );
		// $album = Album::find( 2 );
		if( !isset( $album ) )
			return Response::json( BiaoException::$notExist );
		return View::make('admin.pages.album.album.edit-album')->with(['album'=>$album]);
	}

	public function manage()
	{	
		$albums = Album::all();
		return View::make('admin.pages.album.album.manage-album')->with(['albums'=>$albums]);
	}
	
	public function createAndEdit()
	{		
		if( Input::has('album_id') )
		{
			$album = Album::find( Input::get('album_id') );
			if( !isset( $album ) )
				return Response::json( BiaoException::$notExist );
		}else{
			$album = new Album;
		}
		$title = Input::get('title');
		$file = Input::file('image');
		
		//讲照片存入public目录
		$path = public_path().'/upload/album/';

		$fullArr = array( $title, $file );
		$littleArr = array( $title);
		$dataPath = '/upload/album/';
		$result = FileController::isFileUpload($album,$file,$fullArr,$littleArr,$path,$dataPath);
		if( $result != 'true' )
			return $result;
		//存
		$album->title = $title;
		if( !$album->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );

	}

	public function delete()
	{
		$album = Album::find( Input::get('album_id') );
		if( !isset( $album ) )
			return Response::json( BiaoException::$notExist );
		$album->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$albums = Album::all();	
		return View::make('')->with(['albums'=>$albums]);
	}
}