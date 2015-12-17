<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotographTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{				//照片
		Schema::create('photograph', function(Blueprint $table)
		{
			$table->increments('id');
			//相册id
			$table->integer('album_id')->unsigned()->index('album_id');
			$table->string('title'); 	 //标题
			$table->string('image_url'); //图片链接
			$table->timestamps();

			$table                          
				->foreign('album_id')
				->references('id')->on('album') 
				->onDelete('cascade')
				->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photograph');
	}

}
