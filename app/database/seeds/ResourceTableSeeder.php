<?php

class ResourceTableSeeder extends Seeder {

	public function run()
	{
		for( $i =0; $i < 5; $i++)
		{
			Resource::create([
				'column_title_id' => 1,
				'title' => '徐小平，当创业处于十字路',
				'brief' =>'活动是由共同目的联合起来并完成一定社会职能的动作的总和。活动目的，动机',
				'sequence'=> $i,
				'url' => 'http://www.liyububai.com/',
				'image_url'=> '/upload/111.jpg'
			]);
		}

		for( $i =0; $i < 5; $i++)
		{
			Resource::create([
				'column_title_id' => 2,
				'title' => '徐小平，当创业处于十字路',
				'brief' =>'活动是由共同目的联合起来并完成一定社会职能的动作的总和。活动目的，动机',
				'sequence'=> $i,
				'url' => 'http://www.liyububai.com/',
				'image_url'=> '/upload/111.jpg'
			]);
		}

		for( $i =0; $i < 5; $i++)
		{
			Resource::create([
				'column_title_id' => 3,
				'title' => '徐小平，当创业处于十字路',
				'brief' =>'活动是由共同目的联合起来并完成一定社会职能的动作的总和。活动目的，动机',
				'sequence'=> $i,
				'url' => 'http://www.liyububai.com/',
				'image_url'=> '/upload/111.jpg'
			]);
		}

		for( $i =0; $i < 5; $i++)
		{
			Resource::create([
				'column_title_id' => 4,
				'title' => '徐小平，当创业处于十字路',
				'brief' =>'活动是由共同目的联合起来并完成一定社会职能的动作的总和。活动目的，动机',
				'sequence'=> $i,
				'url' => 'http://www.liyububai.com/',
				'image_url'=> '/upload/111.jpg'
			]);
		}

		for( $i =0; $i < 5; $i++)
		{
			Resource::create([
				'column_title_id' => 5,
				'title' => '徐小平，当创业处于十字路',
				'brief' =>'活动是由共同目的联合起来并完成一定社会职能的动作的总和。活动目的，动机',
				'sequence'=> $i,
				'url' => 'http://www.liyububai.com/',
				'image_url'=> '/upload/111.jpg'
			]);
		}
	}

}