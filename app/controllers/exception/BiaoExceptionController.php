<?php  
class BiaoExceptionController extends BaseController{

	public static pageError( $error )
	{
		return View::make('errors.error')->with(['error'=>$error]);
	}
}