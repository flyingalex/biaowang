<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//链接
		Schema::create('advertisement', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image_url');				//链接
			$table->string('title');					//标题
			$table->integer('sequence')->unique()->nullable();		//排序
			// $table->boolean('display')->default(true);	//是否显示
			$table->integer('type');					//1=微官网广告,2=微投票广告，3=微相册广告
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
		Schema::drop('advertisement');
	}

}
