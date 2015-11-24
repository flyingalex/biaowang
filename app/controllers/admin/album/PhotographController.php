<?php 
class PhotographController extends BaseController{

	public function add()
	{	
		$albums = Album::all();
		return View::make('admin.pages.album.photo.add-photo')->with(['albums'=>$albums]);
	}

	public function edit()
	{	
		$photo = Photograph::find( Input::get('photo_id') );
		if( !isset( $photo ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		$albums = Album::all();
		return View::make('admin.pages.album.photo.edit-photo')->with(['photo'=>$photo,'albums'=>$albums]);
	}

	public function manage()
	{	
		$album_id = Input::get('album_id');
		$album = Album::find( $album_id );
		if( !isset( $album ) )
		{
			$photos = Photograph::all();
		}else{
			$photos = Photograph::where('album_id',$album_id)->get();
		}
		foreach( $photos as $photo )
		{
			$photo->album_title = $photo->album->title;
			$photo->album_id = $photo->album->id;
		}
		
		return View::make('admin.pages.album.photo.manage-photo')->with(['photos'=>$photos]);
	}
	
	public function createAndEdit()
	{
		$album_id = Input::get('album_id');
		$album = Album::find( $album_id );
		if( !isset( $album ) )
			return Response::json( BiaoException::$notExist );

		//编辑or创建？
		if( Input::has('photo_id') )
		{
			$photo = Photograph::find( Input::get('photo_id') );
			if( !isset($photo) )
				return Response::json( BiaoException::$notExist );
		}else{
			$photo = new Photograph;
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

		$photo->album_id 	= $album_id;
		$photo->title 		= $title;
		$photo->image_url 	= $image_url;
		if( !$photo->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );		
	}

	public function delete()
	{
		$phpto = Photograph::find( Input::get('phpto_id') );
		if( !isset( $phpto ) )
			return Response::json( BiaoException::$notExist );
		$phpto->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$album_id = Input::get('album_id');
		$album = Album::find( $album_id );
		if( !isset( $album ) )
			return Response::json( BiaoException::$notExist );
		$photos = Photograph::where('album_id',$album_id)->get();
		return View::make('')->with(['photos'=>$photos]);
	}
}