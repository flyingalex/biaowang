<?php  
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends BaseController{

	//登录静态页
	public function login()
	{
		return View::make('');
	}

	//生成验证码
	public function captcha()
	{	
		session_start();
		$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION['phrase'] = $builder->getPhrase();
		header("Cache-Control: no-cache, must-revalidate");
		header('Content-Type: image/jpeg');
		$builder->output();
		exit;
	}

	//登录
	public function postLogin()
	{
		Session_start();
		$captcha = Input::get('captcha');
		if( $captcha != $_SESSION['phrase'])
			return Response::json(array('errCode'=>1, 'message'=> '验证码不正确'));
		$account = Input::get('account');
		$password = Input::get('password');
		if( !isset( $account ) )
			return Response::json( BiaoException::$inputErr );
		if( !isset( $password ) )
			return Response::json( BiaoException::$inputErr );
		if (!Auth::attempt(array('account' => $account, 'password' => $password),false))
		    return Response::json( BiaoException::$accountOrPasswordErr );
		return Response::json( BiaoException::$ok );
	}

	//登出
	public function logout()
	{
		Auth::logout();
		return Response::json([ 'errCode'=>BiaoException::$ok['errCode'],'message'=>'退出成功' ]);
	}

}