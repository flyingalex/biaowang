<?php 

class InputController extends BaseController{

	//是否为正整数
	public static isNotInt( $arr )
	{
		if( empty( $arr ) )
		{
			return false;
		}
		if( !is_int( $arr ) )
				return true;
		return false;
	}
}