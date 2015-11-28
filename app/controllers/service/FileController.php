<?php 
 class FileController extends BaseController{

 	// const SIZE = '11024';
 	const SIZE = '1000000';
 	//文件上传
 	public static function upload( $file, $path )
 	{	
 		$fileName = time().rand(11111,99999);
		if( !$file->isValid() )
			throw new Exception("file unvalid", 1);
		// //文件类型
		
		// $mime = $file->getMimeType();
		// if( $mime != 'image/jpeg' || $mime != 'image/gif' || $mime != 'image/jpeg' || $mine != 'image/png')
		// 	throw new Exception("type wrong", 2);

		//文件大小
		if( self::SIZE < $file->getSize() )
			throw new Exception("size wrong", 3);
		//存入public目录
		try{
			$file->move($path,$fileName.'.'.$file->getClientOriginalExtension());
		}catch( Exception $e ){
			throw new Exception("Unable to create the ".$path." directory", 4);
		}
		return $fileName.'.'.$file->getClientOriginalExtension();
	}

	//错误返回
	public static function errMessage( $errCode )
	{
		if( $errCode == 1)
			return Response::make( BiaoException::$fileUnvalid );
		if( $errCode == 2)
			return Response::make( BiaoException::$mimeErr );
		if( $errCode == 3)
			return Response::make( BiaoException::$fileSizeErr );
		if( $errCode == 4)
			return Response::make( BiaoException::$fileStorageErr );
	}

	/**
	 * [isFileUpload description]
	 * @param  [type]  $object   [实例]
	 * @param  [type]  $file     [上传的文件]
	 * @param  [type]  $fullArr  [全部参数]
	 * @param  [type]  $littlArr [缺少file的参数]
	 * @param  [type]  $path     [完整路径]
	 * @param  [type]  $dataPath [数据库路径]
	 * @return boolean           [description]
	 */
	public static function isFileUpload($object,$file,$fullArr,$littlArr,$path,$dataPath)
	{
		if( isset( $object->id ) )
		{	
			//判空
			if( Input::hasFile('image'))
			{	
				try{
					$image_url = FileController::upload( $file, $path );
				}catch( Exception $e ){
					return FileController::errMessage( $e->getCode() );
				}
				$image_url = $dataPath.$image_url;
				$object->image_url = $image_url;

				if( InputController::isNullInArray( $fullArr ) )
					return Response::json( BiaoException::$parameterIncomplete );
			}else{
				if( InputController::isNullInArray( $littlArr ) )
					return Response::json( BiaoException::$parameterIncomplete );
			}
		}else{
			if( InputController::isNullInArray( $fullArr ) )
			return Response::json( BiaoException::$parameterIncomplete );
			try{
				$image_url = FileController::upload( $file, $path );
			}catch( Exception $e ){
				return FileController::errMessage( $e->getCode() );
			}
			$image_url = $dataPath.$image_url;
			$object->image_url = $image_url;
		}
		return 'true';
	}

	public function imageUpload()
	{	
		if( !Input::hasFile( 'image' ) )
			return Response::json( BiaoException::$inputErr );

		$file = Input::file('image');
		$path = public_path().'/upload/';
		try{
			$image_url = self::upload( $file,$path );
		}catch( Exception $e ){
			return self::errMessage( $e->getCode() );
		}

		return Response::json([ 'errCode'=>'0','image_url'=>'/upload/'.$image_url ]);
	}

	public static function isValidImage( $file )
	{		

		if(  !file_exists( public_path().$file ) )
		{	
			throw new Exception( );
		}
		copy( public_path().$file, public_path().'/admin'.$file);
		return '/admin'.$file;
	}

	public static function isValidAdminUpload( $file )
	{

		if(  !file_exists( public_path().$file ) )
		{	
			throw new Exception( );
		}
		return $file;
	}

	public static function isImageUpload($object,$file,$fullArr,$littlArr)
	{	
		if( isset( $object->id ) )
		{	//编辑
			if( !empty($file) )
			{	
				try{
					$image_url = self::isValidImage( $file );
				}catch( Exception $e ){
					return Response::json( BiaoException::$notExist ) ;
				}
				$object->image_url = $image_url;

				if( InputController::isNullInArray( $fullArr ) )
					return Response::json( BiaoException::$parameterIncomplete );
			}else{
				if( InputController::isNullInArray( $littlArr ) )
					return Response::json( BiaoException::$parameterIncomplete );
			}
		}else{
			if( InputController::isNullInArray( $fullArr ) )
				return Response::json( BiaoException::$parameterIncomplete );
			try{
				$image_url = self::isValidImage( $file );
			}catch( Exception $e ){
				return Response::json( BiaoException::$notExist ) ;
			}
			$object->image_url = $image_url;
		}
		return 'true';
	}
}
