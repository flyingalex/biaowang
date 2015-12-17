<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//干货
		Schema::create('resource', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('column_title_id')->unsigned()->index('column_title_id'); //栏目id
			$table->string('title');	//标题
			$table->text('brief');	//简介
			$table->integer('sequence')->nullable(); //排序
			$table->string('url'); 				 //外链
			$table->string('image_url'); 		//图片链接
			$table->timestamps(); 

			$table                          
				->foreign('column_title_id')
				->references('id')->on('column_title') 
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
		Schema::drop('resource');
	}

}
