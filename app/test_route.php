<?php 

Route::get('/',function(){
	 $date = new date();
	 return $date;

	return View::make('test');
});

Route::post('/',function(){
	$file = Input::file('img');
	$path = public_path().'/upload/image/';
	$name = time().rand(11111,99999);
	try{
		$image_url = FileController::upload( $file, $path, $name );
	}catch( Exception $e ){
		return $e->getMessage();
		return FileController::errMessage( $e->getCode() );
	}
	return $image_url;
});


