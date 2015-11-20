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
	//验证码
	Route::get('captcha','LoginController@captcha');
	//登录
	Route::get('login','LoginController@login');
	Route::post('login','LoginController@postLogin');

	Route::group(array('before'=>'auth'),function(){

		Route::post('logout','LoginController@logout');
		//微官网
		Route::group(array('prefix'=>'official'),function(){
			//广告图片－浏览
			Route::get('ads','adsController@index');
			//广告图片－增加
			Route::post('ads-create','adsController@create');
			//广告图片－删
			Route::post('ads-delete','adsController@delete');
			//广告图片－编辑
			Route::post('ads-edit','adsController@edit');
			//活动广告－增加
			Route::post('activity-ads-create','ActivityAdsController@create');
			//活动广告－删
			Route::post('activity-ads-delete','ActivityAdsController@delete');
			//活动广告－编辑
			Route::post('activity-ads-edit','ActivityAdsController@edit');
			
			//栏目标题－浏览
			Route::get('title-index','TitleController@index');
			//栏目标题-编辑
			Route::post('title-edit','TitleController@edit');	
			//干货版块标题－浏览
			Route::get('column-title-index','ColumnTitleController@index');
			//干货版块标题－编辑
			Route::post('column-title-edit','ColumnTitleController@edit');

			//干货－浏览
			Route::get('resource-index','ResourceController@index');
			//干货－添加
			Route::post('resource-create','ResourceController@create');
			//干货－删除
			Route::post('resource-delete','ResourceController@delete');
			//干货－编辑
			Route::post('resource-edit','ResourceController@edit');
		});

		//微投票
		Route::group(array('prefix'=>'vote'),function(){

			
		});

		//微相册
		Route::group(array('prefix'=>'album'),function(){

			
		});
	});
});
