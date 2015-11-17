<?php  

class FontendController extends BaseController{

	public function home()
	{
		
	}
}

// Route::get('/', function()
// {	
	// Cookie::make('tiger','man',time()+10);
	
	// $date = time()+2628000;
	// $value = Cookie::make('vote',json_encode( array('2'=>4),true ),$date)->getValue();
	// header("Set-Cookie: vote={$value}; EXPIRES{$date};");
	// dd( $_COOKIE['vote'] );

// 	$response = Response::json(array('tiger'=>'man'));
// 	$response->headers->setCookie( Cookie::make( 'vote',json_encode(array()),time()+2628000 ) );
// 	dd( json_decode( Cookie::get('vote'), true ) );
// 	return $response;
// 	// return  json_decode( Cookie::get('vote'), true);
// });

// if ( ( $remember = Input::get( 'remember' ) ) == 'true' ){
//                 $response->headers->setCookie( Cookie::make( 'remember', true, self::$remember_expire ) );
//                 $response->headers->setCookie( Cookie::make( 'phone', $phone, self::$remember_expire ) );
//                 $response->headers->setCookie( Cookie::make( 'password', $password, self::$remember_expire ) );
//             }else{
//                 $response->headers->setCookie( Cookie::forget( 'remember' ) );
//                 $response->headers->setCookie( Cookie::forget( 'phone' ) );
//                 $response->headers->setCookie( Cookie::forget( 'password' ) );
//             }

