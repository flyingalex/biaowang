<?php

try{
	include_once 'test_route.php';
}catch( Exception $e){
	
}

//前端
Route::group(array('prefix'=>'wetchat'),function(){
	//首页
	Route::get('home','FontendPageController@home');
	//投票
	Route::get('vote','FontendPageController@vote');
	Route::post('vote','FontendController@vote');
	//规则
	Route::get('rule','FontendPageController@rule');
	//相册
	Route::get('album','FontendPageController@album');
	//相册图片
	Route::get('sub-album','FontendPageController@subAlbum');
	//首页分页
	Route::post('home-pagination','FontendController@homePagination');
	//投票分页
	Route::post('vote-pagination','FontendController@votePagination');
	//微相册分页
	Route::post('album-pagination','FontendController@albumPagination');
	//相册详细页
	Route::get('album-detail','FontendController@albumDetail');
});


Route::group(array('prefix'=>'admin'), function(){
	//登录
	Route::get('/','LoginController@login');
	Route::post('/','LoginController@postLogin');

	//微官网
	Route::group(array('prefix'=>'official'),function(){
		//广告图片
		Route::get('ads','OfficialController@ads');
		
	});

	//微投票
	Route::group(array('prefix'=>'vote'),function(){

		
	});

	//微相册
	Route::group(array('prefix'=>'album'),function(){

		
	});



});
