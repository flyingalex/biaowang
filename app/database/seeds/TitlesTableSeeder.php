<?php

class TitlesTableSeeder extends Seeder {

	public function run()
	{
			Title::create([
				'middle_title' 		=>'活动现场',
				'middle_subtitle' 	=>'SITE OF ACTIVITY',
				'bottom_title' 		=>'软文干货',
				'bottom_subtitle' 	=>'SITE OF ACTIVITY'
			]);
	}

}