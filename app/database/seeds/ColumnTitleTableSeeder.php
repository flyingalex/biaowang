<?php

class ColumnTitleTableSeeder extends Seeder {

	public function run()
	{
		
			ColumnTitle::create([
				'classification' => '课堂',
			]);
			ColumnTitle::create([
				'classification' => '案例',
			]);
			ColumnTitle::create([
				'classification' => '笔记',
			]);
			ColumnTitle::create([
				'classification' => '榜单',
			]);
			ColumnTitle::create([
				'classification' => '报名',
			]);
		
	}

}