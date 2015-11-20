<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//项目
		Schema::create('project', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sign_up_total');	//已报名人数
			$table->integer('vote_total');		//投票人数	
			$table->integer('view_total');		//访问量
			$table->string('title');			//投票标题
			$table->date('vote_close');			//投票截止
			$table->text('content');			//活动介绍
			// $table->string('image_url');		//活动图片链接
			$table->date('sign_up_start');		//报名开始时间
			$table->date('sign_up_stop');		//报名截止时间
			$table->date('vote_start');			//投票开始时间
			$table->date('vote_stop');			//投票截止时间
			$table->text('activity_rule');		//活动规则
			$table->text('award_site');			//奖项设置
			$table->boolean('display')->default(false);//是否显示
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
		Schema::drop('project');
	}

}
