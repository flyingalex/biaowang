<?php

class AdvertisementTableSeeder extends Seeder {

	public function run()
	{

		
		for( $i = 0; $i < 5; $i++ )
		{
			Advertisement::create([
				'image_url'=>'/upload/111.jpg',
				'title' => '立于不败',
				'sequence' => $i,
				'url' => 'http://www.liyububai.com',
				'type' => 1
			]);
		}

		for( $i = 0; $i < 5; $i++ )
		{
			Advertisement::create([
				'image_url'=>'/upload/111.jpg',
				'title' => '立于不败',
				'sequence' => $i,
				'url' => 'http://www.liyububai.com',
				'type' => 2
			]);
		}

		for( $i = 0; $i < 5; $i++ )
		{
			Advertisement::create([
				'image_url'=>'/upload/111.jpg',
				'title' => '立于不败',
				'sequence' => $i,
				'url' => 'http://www.liyububai.com',
				'type' => 3
			]);
		}
	}

}