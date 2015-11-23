<?php 
class AlbumController extends BaseController{

	public function add()
	{
		return View::make('admin.pages.album.album.add-album');
	}

	public function edit()
	{	
		// $album = Album::find( Input::get('album_id') );
		$album = Album::find( 2 );
		if( !isset( $album ) )
			return Response::json( BiaoException::$notExist );
		return View::make('admin.pages.album.album.edit-album')->with(['album'=>$album]);
	}

	public function manage()
	{
		return View::make('admin.pages.album.album.manage-album');
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

		//判空
		$arr = array( $file,$title );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );

		try{
			$image_url = FileController::upload( $file, $path );
		}catch( Exception $e ){
			return FileController::errMessage( $e->getCode() );
		}
		$image_url = '/upload/album/'.$image_url;

		//存
		$album->title = $title;
		$album->image_url = $image_url;
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