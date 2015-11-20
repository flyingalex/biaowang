<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{					//栏目标题
		Schema::create('titles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('middle_title');
			$table->string('middle_subtitle');
			$table->string('bottom_title');
			$table->string('bottom_subtitle');
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
		Schema::drop('titles');
	}

}
