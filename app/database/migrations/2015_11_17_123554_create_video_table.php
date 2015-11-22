<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//视频
		Schema::create('video', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title'); 		// 标题
			$table->string('url');   		//外链
			$table->string('image_url');    //图片链接
			// $table->integer('type'); 		//1=标王相册，2=标王视频
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('video');
	}

}
