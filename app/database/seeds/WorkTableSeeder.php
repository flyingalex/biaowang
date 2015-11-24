<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WorkTableSeeder extends Seeder {

	public function run()
	{
		
		for( $i = 0; $i < 9; $i++)
		{
			Work::create([
				'project_id' 	=> 1,
				'title' 		=> '项目中的各个展品',
				'url' 			=> 'http://www.liyububai.com/',
				'vote_number'	=> rand(222,999),
				'image_url' 	=> '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 9; $i++)
		{
			Work::create([
				'project_id' 	=> 2,
				'title' 		=> '项目中的各个展品',
				'url' 			=> 'http://www.liyububai.com/',
				'vote_number'	=> rand(222,999),
				'image_url' 	=> '/upload/222.jpg'
			]);
		}

	}

}