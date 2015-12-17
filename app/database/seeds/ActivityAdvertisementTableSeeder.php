<?php

class ActivityAdvertisementTableSeeder extends Seeder {

	public function run()
	{
		
		for( $i = 0; $i < 2; $i++)
		{
			ActivityAdvertisement::create([
				'title' 	=> '活动广告标题',
				'sub_title'	=> '活动广告小标题',
				'image_url' => '/upload/111.jpg',
				'sequence' 	=> $i,
				'url' 		=> 'http://www.liyububai.com'
			]);
		}

	}

}