<?php 

class UserController extends BaseController{
									
	public function resetPassword()
	{
		$source_code	= Input::get('source_code');
		$password 		= Input::get('password');
		$re_password 	= Input::get('re_password');
		//判空
		$arr = array( $source_code,$password,$re_password );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );

		if( !Auth::validate( array( 'account'=>Auth::user()->account, 'password' => $source_code) ) )
			return Response::json( BiaoException::$passwordErr );

		$validator = Validator::make(
			    array('password' => $password),
			    array('password' => 'alpha_dash')
			);
		if( $validator->fails() )
			return Response::json( BiaoException::$passwordErr );
		if( $password != $re_password )
			return Response::json( BiaoException::$passwordNotEqual );
		$user = Auth::user();
		$user->password = Hash::make( $password );
		if( !$user->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );

	}	
}