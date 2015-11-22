<?php

try{
	include_once 'test_routes.php';
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
		Route::group(array('prefix'=>'offical'),function(){
			//广告图片－浏览
			Route::get('advert-index','AdvertController@index');
			//广告图片－增加和编辑
			Route::post('advert-create-edit','AdvertController@createAndEdit');
			//广告图片－删
			Route::post('advert-delete','AdvertController@delete');
			//活动广告－增加和编辑
			Route::post('activity-advert-create-edit','ActivityAdvertController@createAndEdit');
			//活动广告－删
			Route::post('activity-advert-delete','ActivityAdvertController@delete');
			
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
			//干货－添加和编辑
			Route::post('resource-create-edit','ResourceController@createAndEdit');
			//干货－删除
			Route::post('resource-delete','ResourceController@delete');
		});

		//微投票
		Route::group(array('prefix'=>'vote'),function(){
			//项目浏览
			Route::get('project-index','ProjectController@index');
			//项目创建和编辑
			Route::post('project-cretae-edit','ProjectController@createAndEdit');
			//项目删除
			Route::post('project-delete','ProjectController@delete');
			//项目是否显示
			Route::post('project-display','ProjectController@display');
			//内容浏览
			Route::get('work-index','WorkController@index');
			//内容查创建和编辑
			Route::post('work-create-edit','WorkController@createAndEdit');
			//内容删除
			Route::post('work-delete','WorkController@delete');
		});

		//微相册
		Route::group(array('prefix'=>'album'),function(){
			//相册浏览
			Route::get('album-index','AlbumController@index');
			//相册创建和编辑
			Route::post('album-create-edit','AlbumController@createAndEdit');
			//相册删除
			Route::post('album-delete','AlbumController@delete');
			//照片浏览
			Route::get('photo-index','PhotographController@index');
			//照片创建和编辑
			Route::post('photo-create-edit','PhotographController@createAndEdit');
			//照片删除
			Route::post('photo-delete','PhotographController@delete');
			//视频浏览
			Route::get('video-index','VideoController@index');
			//视频创建和编辑
			Route::post('video-create-edit','VideoController@createAndEdit');
			//视频删除
			Route::post('video-delete','VideoController@delete');
			
		});

		//系统设置
		Route::group(array('prefix'=>'system'),function(){
			//重置密码
			Route::post('reset-password','UserController@resetPassword');
			//新闻浏览
			Route::get('news-index','NewsController@index');
			//新闻编辑和创建
			Route::post('news-create-edit','NewsController@createAndEdit');
			//新闻删除
			Route::post('news-delete','NewsController@delete');
		});
	});
});
