<?php 

Route::get('/',function(){
	
	$user = User::orderBy('account','asc')->count();
	// ->get();
	return $user;
	return $user[0]->account;

	return Response::json(BiaoException::$ok);


	 $user = User::select('account')->first();
	 return $user->passwor ;

	return (new BiaoException(1,'tiger'))->getArray();
	return $exception->getArray();
});

