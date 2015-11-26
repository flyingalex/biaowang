<?php  
class BiaoExceptionController extends BaseController{

	public static function pageError( $error )
	{
		return View::make('errors.error')->with(['error'=>$error]);
	}
}