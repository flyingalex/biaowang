<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		
			User::create([
				'account' => 'admin',
				'password'=> Hash::make('admin'),
				'remember_token' => '123'
			]);

			User::create([
				'account' => 'admin2',
				'password'=> Hash::make('admin2'),
				'remember_token' => '123'
			]);

			User::create([
				'account' => 'admin3',
				'password'=> Hash::make('admin3'),
				'remember_token' => '123'
			]);
	}

}