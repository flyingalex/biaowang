<?php

class NewsTableSeeder extends Seeder {

	public function run()
	{
			News::create([
				'content' => '新闻联播播放中'
			]);
			News::create([
				'content' => '新闻联播播放中'
			]);
			News::create([
				'content' => '新闻联播播放中'
			]);
			News::create([
				'content' => '新闻联播播放中'
			]);
	}

}