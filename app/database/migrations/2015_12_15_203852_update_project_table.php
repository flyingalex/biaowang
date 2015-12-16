<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project', function(Blueprint $table)
		{
			$table->dateTime('sign_up_start');		//报名开始时间
			$table->dateTime('sign_up_stop');		//报名截止时间
			$table->dateTime('vote_start');			//投票开始时间
			$table->dateTime('vote_stop');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project', function(Blueprint $table)
		{
			//
		});
	}

}
