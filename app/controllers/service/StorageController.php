<?php 

class StorageController extends BaseController{

	//讲广告插入数据库
	public function static storageAds( $title, $sequence, $image_url, $url, $type )
	{
		$ads = new Advertisement();
		$ads->title 	= $title;
		$ads->sequence 	= $sequence;
		$ads->image_url = $image_url;
		$ads->url 		= $url;
		$ads->type 		= $type;
		if( !$ads->save())
			return false;
		return true;
	}

	//编辑广告并存入数据
	public function static storageEditAds( $object,$file,$path,$title,$sequence,$url,$type)
	{
		if( $file->isValid() )
		{
			try{
				$image_url = FileController::upload( $file, public_path().$path );
			}catch( Exception $e ){
				return FileController::errMessage( $e->getCode() );
			}
			$object->image_url = $path.$image_url;
		}
		if( !empty( $title ) )	
			$object->title = $title;
		if( !empty( $url ) )
			$object->url = $url;
		if( !InputController::isNotInt( $sequence ) )
			$object->sequence = $sequence;
		$object->type = $type;
		if( !$object->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}
}