<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumnsProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project', function(Blueprint $table)
		{	
			$table->dropColumn('sign_up_start');		//报名开始时间
			$table->dropColumn('sign_up_stop');		//报名截止时间
			$table->dropColumn('vote_start');			//投票开始时间
			$table->dropColumn('vote_stop');
			
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
		});
	}

}
