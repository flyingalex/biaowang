<?php


class PhotographTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 1,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 2,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 3,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 4,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 5,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}

		for( $i = 0; $i < 6; $i++)
		{
			Photograph::create([
				'album_id'=> 5,
				'title' => '立于不败照片',
				'image_url' => '/upload/222.jpg'
			]);
		}
	}

}