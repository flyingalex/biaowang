<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		
			User::create([
				'account' => 'admin',
				'password'=> 'admin'
			]);

			User::create([
				'account' => 'admin2',
				'password'=> 'admin2'
			]);

			User::create([
				'account' => 'admin3',
				'password'=> 'admin3'
			]);
	}

}