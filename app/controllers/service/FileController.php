<?php 
 class FileController extends BaseController{

 	// const SIZE = '11024';
 	const SIZE = '10240';
 	//文件上传
 	public static function upload( $file, $path )
 	{	
 		$fileName = time().rand(11111,99999);
		if( !$file->isValid() )
			throw new Exception("file unvalid", 1);
		//文件类型
		$mime = $file->getMimeType();
		if( $mime != 'image/jpeg' && $mime != 'image/gif' && $mime != 'image/jpeg')
			throw new Exception("type wrong", 2);
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
			return Response::json( BiaoException::$fileUnvalid );
		if( $errCode == 2)
			return Response::json( BiaoException::$mimeErr );
		if( $errCode == 3)
			return Response::json( BiaoException::$fileSizeErr );
		if( $errCode == 4)
			return Response::json( BiaoException::$fileStorageErr );
	}
}
