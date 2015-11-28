<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		#$this->call('ProjectTableSeeder');
		#$this->call('WorkTableSeeder');
		#$this->call('AlbumTableSeeder');
		#$this->call('PhotographTableSeeder');
		#$this->call('VideoTableSeeder');
		$this->call('ColumnTitleTableSeeder');
		#$this->call('ResourceTableSeeder');
		#$this->call('ActivityAdvertisementTableSeeder');
		#$this->call('AdvertisementTableSeeder');
		#$this->call('NewsTableSeeder');
		#$this->call('TitlesTableSeeder');
	}

}
