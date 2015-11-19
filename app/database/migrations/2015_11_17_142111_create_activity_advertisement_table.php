<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityAdvertisementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//活动广告
		Schema::create('activity_advertisement', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');			//标题<12
			$table->string('sub_title');		//副标题<14
			$table->string('image_url');		//图片链接
			$table->integer('sequence')->unique()->nullable();//排序
			// $table->boolean('display')->defalut(true);//是否呈现
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
		Schema::drop('activity_advertisement');
	}

}
