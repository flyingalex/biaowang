<?php

//前端
Route::group(array('prefix'=>'fontend'),function(){
	//首页
	Route::get('home','FontendPageController@home');
	//投票
	Route::get('vote','FontendPageController@vote');
	//规则
	Route::get('rule','FontendPageController@rule');
	//相册
	Route::get('album','FontendPageController@album');
	//相册图片
	Route::get('sub-album','FontendPageController@subAlbum');
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
	Route::group(array('prefix'=>'official'),function(){

		
	});

	//微相册
	Route::group(array('prefix'=>'official'),function(){

		
	});



});
