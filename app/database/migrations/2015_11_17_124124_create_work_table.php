<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//项目内容
		Schema::create('work', function(Blueprint $table)
		{
			$table->increments('id');
			//关联项目id
			$table->integer('project_id')->unsigned()->index('project_id');
			$table->string('title');    	//标题
			$table->string('url');			//外链
			$table->integer('vote_number'); //投票数
			$table->string('image_url');	//图片链接
			$table->timestamps();

			$table                          
				->foreign('project_id')
				->references('id')->on('project') 
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
		Schema::drop('work');
	}

}
