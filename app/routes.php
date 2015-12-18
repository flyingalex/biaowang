<?php

try{
	include_once 'test_routes.php';
}catch( Exception $e){
	
}

Route::get('admin',function(){
	return View::make('admin.pages.official.advert.manage-advert');
});

//重定向
Route::get('/',function(){
	return Redirect::to('/wechat/official');
});

//前端
Route::group(array('prefix'=>'wechat'),function(){
	//首页
	Route::get('official','FontendPageController@home');
	//投票
	Route::get('vote','FontendPageController@vote');
	Route::post('vote','FontendController@vote');
	//规则
	Route::get('rule','FontendPageController@rule');
	//奖项设置
	Route::get('adward','FontendPageController@award');
	//相册
	Route::get('album','FontendPageController@album');
	//视频
	Route::get('video','FontendPageController@video');
	//相册图片
	Route::get('photos','FontendPageController@subAlbum');
	//首页分页
	Route::get('home-pagination','FontendController@homePagination');
	//投票分页
	Route::get('vote-pagination','FontendController@votePagination');
	//微相册分页
	Route::get('album-pagination','FontendController@albumPagination');
	//微视频分页
	Route::get('video-pagination','FontendController@videoPagination');
	//相册详细页
	Route::get('album-detail','FontendController@albumDetail');

    Route::get('album-all','FontendController@albumAll');
});


Route::group(array('prefix'=>'admin'), function(){
	//验证码
	Route::get('captcha','LoginController@captcha');
	//登录
	Route::get('login','LoginController@login');
	Route::post('login','LoginController@postLogin');

	Route::group(array('before'=>'auth'),function(){

		Route::post('logout','LoginController@logout');
		
		Route::post('image-upload','FileController@imageUpload');
		Route::post('isvalid-image','FileController@isValidImage');

		//微官网
		Route::group(array('prefix'=>'official'),function(){

			//广告模块
			Route::group(array('prefix'=>'advert'),function(){
				//添加
				Route::get('add','AdvertController@add');
				//编辑
				Route::get('edit','AdvertController@edit');
				//管理
				Route::get('manage','AdvertController@manage');
				//广告图片－增加和编辑
				Route::post('advert-create-edit','AdvertController@createAndEdit');
				//广告图片－删
				Route::post('advert-delete','AdvertController@delete');
				//添加to do 
				Route::get('activity-add','ActivityAdvertController@add');
				//编辑to do 
				Route::get('activity-edit','ActivityAdvertController@edit');
				//活动广告－增加和编辑
				Route::post('activity-create-edit','ActivityAdvertController@createAndEdit');
				//活动广告－删
				Route::post('activity-delete','ActivityAdvertController@delete');
			});
			
			//干货模块
			Route::group(array('prefix'=>'resource'),function(){
				//添加
				Route::get('add','ResourceController@add');
				//编辑
				Route::get('edit','ResourceController@edit');
				//管理
				Route::get('manage','ResourceController@manage');
				//干货－添加和编辑
				Route::post('create-edit','ResourceController@createAndEdit');
				//干货－删除
				Route::post('delete','ResourceController@delete');
			});

			//标题模块
			Route::group(array('prefix'=>'title'),function(){
				//编辑
				Route::get('manage','TitleController@titleEdit');
				//栏目标题-编辑
				Route::post('title-edit','TitleController@edit');	
				//干货版块标题－编辑
				Route::post('column-title-edit','ColumnTitleController@edit');
			});

		});

		//微投票
		Route::group(array('prefix'=>'vote'),function(){
			

			//广告模块
			Route::group(array('prefix'=>'advert'),function(){
				//添加
				Route::get('add','VoteAdvertController@add');
				//编辑
				Route::get('edit','VoteAdvertController@edit');
				//管理
				Route::get('manage','VoteAdvertController@manage');
			});

			//内容模块
			Route::group(array('prefix'=>'content'),function(){
				//添加
				Route::get('add','WorkController@add');
				//编辑
				Route::get('edit','WorkController@edit');
				//管理
				Route::get('manage','WorkController@manage');
				//内容查创建和编辑
				Route::post('create-edit','WorkController@createAndEdit');
				//内容删除
				Route::post('delete','WorkController@delete');
			});

			//项目模块
			Route::group(array('prefix'=>'project'),function(){
				//添加
				Route::get('add','ProjectController@add');
				//编辑
				Route::get('edit','ProjectController@edit');
				//管理
				Route::get('manage','ProjectController@manage');
				//项目创建和编辑
				Route::post('create-edit','ProjectController@createAndEdit');
				//项目删除
				Route::post('delete','ProjectController@delete');
				//项目是否显示
				Route::post('display','ProjectController@display');
			});


		});

		//微相册
		Route::group(array('prefix'=>'album'),function(){
			
			//广告模块
			Route::group(array('prefix'=>'advert'),function(){
				//添加
				Route::get('add','AlbumAdvertController@add');
				//编辑
				Route::get('edit','AlbumAdvertController@edit');
				//管理
				Route::get('manage','AlbumAdvertController@manage');
			});
				
			//相册模块
			Route::group(array('prefix'=>'album'),function(){
				//添加
				Route::get('add','AlbumController@add');
				//编辑
				Route::get('edit','AlbumController@edit');
				//管理
				Route::get('manage','AlbumController@manage');
				//相册创建和编辑
				Route::post('create-edit','AlbumController@createAndEdit');
				//相册删除
				Route::post('delete','AlbumController@delete');
			});

			//照片模块
			Route::group(array('prefix'=>'photo'),function(){
				//添加
				Route::get('add','PhotographController@add');
				//编辑
				Route::get('edit','PhotographController@edit');
				//管理
				Route::get('manage','PhotographController@manage');
				//照片创建和编辑
				Route::post('create-edit','PhotographController@createAndEdit');
				//照片删除
				Route::post('delete','PhotographController@delete');
			});

			//视频模块
			Route::group(array('prefix'=>'video'),function(){
				//添加
				Route::get('add','VideoController@add');
				//编辑
				Route::get('edit','VideoController@edit');
				//管理
				Route::get('manage','VideoController@manage');
				//视频创建和编辑
				Route::post('create-edit','VideoController@createAndEdit');
				//视频删除
				Route::post('delete','VideoController@delete');
			});
			
		});

		//系统设置
		Route::group(array('prefix'=>'system'),function(){
			//新闻管理
			Route::get('manage-news','NewsController@index');
			//用户管理
			Route::get('manage-user','UserController@index');
			//重置密码
			Route::post('reset-password','UserController@resetPassword');
			//新闻编辑和创建
			Route::post('news-create-edit','NewsController@createAndEdit');
			//新闻删除
			Route::post('news-delete','NewsController@delete');
		});
	});
});
