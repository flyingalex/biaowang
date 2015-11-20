<?php 

class InputController extends BaseController{

	//是否为正整数
	public static function isNotUnique( $field,$sequences )
	{		
		$arrs = array();
		foreach( $sequences as $sequence )
		{
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


}