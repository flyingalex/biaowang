<?php 

class InputController extends BaseController{

	//是否为正整数
	public static function isNotUnique($id, $field, $sequences )
	{	
		$arrs = array();
		foreach( $sequences as $sequence )
		{	
			if( $id != $sequence->id )
				array_push($arrs,$sequence->sequence );
		}
		$arrs = array_filter( $arrs );
		if( count( $arrs )==0  )
			return false;
		foreach( $arrs as $number )
		{
			if( $number == $field )
				return true;
		}
		return false;
	}

	//参数判空
	public static function isNullInArray( $array )
	{
		foreach( $array as $arr )
		{
			if( empty( $arr ) )
				return true;
		}
		return false;
	}

	//时间正则匹配
	public static function isPregMatch( $arrs )
	{
		foreach( $arrs as $arr )
		{	
			$d=strtotime( $arr );
			if( date("Y-m-d H:i:s", $d) == '1970-01-01 08:00:00')
				return false;
			// if( !preg_match( '/^[0-9]{4}-[0,1][0-9]-[0-3][0-9][\s]+[0-2][0-4]:[0-5][0-9]:[0-5][0-9]$/', trim($arr) ) )
				// return false;
			// if( !preg_match( '/^[0-9]{4}-[0,1][0-9]-[0-3][0-9]$/', trim($arr) ) )
			// 	return false;
		}
		return true;
	}

	//对时间对作判断
	public static function isTimeSetRight( $time1,$time2 )
	{
		if( $time1 <= $time2 )
			return true;
		return false;
	}

}