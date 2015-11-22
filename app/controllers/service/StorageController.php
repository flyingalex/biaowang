<?php 

class StorageController extends BaseController{

	//文件存入数据库并放回文件名
	public static function storageImgToPublic( $file,$path )
	{
		if( !empty( $file ) )
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
		}
	}

	//从数组中去掉自身
	public static function filterSelf($id, $objects)
	{	
		$arrs = array();	
		foreach( $objects as $ob )
		{		
			if( $ob->id != $id )
			{
				array_push($arrs, $ob);
			}else{
				unset( $ob );
			}
		}
		return $arrs;
	}


	//将广告插入数据库
	public static function storageAds( $title, $sequence, $image_url, $url, $type )
	{
		$ads = new Advertisement;
		$ads->title 	= $title;
		$ads->sequence 	= $sequence;
		$ads->image_url = $image_url;
		$ads->url 		= $url;
		$ads->type 		= $type;
		if( !$ads->save())
			return false;
		return true;
	}

	//将活动广告存入数据库
	public static function storageActivityAds( $title, $subtitle, $sequence, $image_url, $url )
	{
		$ads = new ActivityAdvertisement;
		$ads->title 	= $title;
		$ads->sub_title = $subtitle;
		$ads->sequence 	= $sequence;
		$ads->image_url = $image_url;
		$ads->url 		= $url;
		if( !$ads->save())
			return false;
		return true;	
	}

	//将干货存入数据库
	public static function storageResource( $column_title_id, $title, $brief, $sequence, $image_url, $url )
	{
		$resource = new Resource;
		$resource->column_title_id 	= $column_title_id;
		$resource->title 			= $title;
		$resource->brief 			= $brief;
		$resource->sequence 		= $sequence;
		$resource->image_url 		= $image_url;
		$resource->url 				= $url;
		if( !$resource->save())
			return false;
		return true;
	}

	//编辑广告并存入数据
	public static function storageEditAds( $object,$file,$path,$title,$sequence,$url,$type,$ads_id)
	{
		$message = self::storageImgToPublic( $file,$path );
		if( !is_null( $message ) )
			return $message;

		if( !empty( $title ) )	
			$object->title = $title;
		if( !empty( $url ) )
			$object->url = $url;

		$sequences = Advertisement::where('type',1)->select('id','sequence')->get();
		
		//去重自身
		$arrs = self::filterSelf( $ads_id, $sequences );
		if( InputController::isNotUnique( $sequence,$arrs ) )
			return Response::json( BiaoException::$isNotUnique );
		if( !empty($sequence) )
			$object->sequence = $sequence;
		$object->type = $type;
		
		if( !$object->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	//编辑活动广告存入数据库
	public static function storageEditActivityAds($object,$file,$path,$title,$subtitle,$sequence,$url,$ads_id)
	{
		$message = self::storageImgToPublic( $file,$path );
		if( !is_null( $message ) )
			return $message;

		if( !empty( $title ) )	
			$object->title = $title;
		if( !empty( $subtitle ) )
			$object->sub_title = $subtitle;
		if( !empty( $url ) )
			$object->url = $url;
		
		$sequences = ActivityAdvertisement::all();

		//去重自身
		$arrs = self::filterSelf( $ads_id, $sequences );

		if( InputController::isNotUnique( $sequence,$arrs ) )
			return Response::json( BiaoException::$isNotUnique );
		if( !empty($sequence) )
			$object->sequence = $sequence;

		if( !$object->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	//编辑干货存入数据库
	public static function storageEditResource($object,$file,$path,$title,$subtitle,$sequence,$url,$resource_id)
	{
		$message = self::storageImgToPublic( $file,$path );
		if( !is_null( $message ) )
			return $message;

		if( !empty( $title ) )	
			$object->title = $title;
		if( !empty( $bref ) )
			$object->bref = $bref;
		if( !empty( $url ) )
			$object->url = $url;
		
		//去重自身	
		$sequences = Resource::all();
		$arrs = self::filterSelf( $resource_id, $sequences );

		if( InputController::isNotUnique( $sequence,$arrs ) )
			return Response::json( BiaoException::$isNotUnique );
		if( !empty($sequence) )
			$object->sequence = $sequence;

		if( !$object->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	//存储干货
	public static function storageProject($title,$content,$sign_up_start,$sign_up_stop,$vote_start,$vote_stop,$activity_rule,$award_site);
	{
		$project 				= new Project;
		$project->title 		= $title;
		$project->content 		= $content;
		$project->sign_up_start = $sign_up_start;
		$project->sign_up_stop	= $sign_up_stop;
		$project->vote_start 	= $vote_start;
		$project->vote_stop 	= $vote_stop;
		$project->activity_rule = $activity_rule;
		$project->award_site 	= $award_site;

		if( !$project->save() )
			return false;
		return true;
	}
	
}