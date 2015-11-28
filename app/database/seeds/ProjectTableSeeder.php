<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder {

	public function run()
	{	
		
			Project::create([
				'sign_up_total' 	=> 100,
				'vote_total' 		=> 100,
				'view_total'		=> 100,
				'title' 			=> '立于不败明星企业家',
				'content'			=> '本活动仅限山政大学生参加，男女不限，还望大家积极报名，奖品丰富',
				'sign_up_start'		=> '2015-12-25',
				'sign_up_stop'		=> '2015-12-29',
				'vote_start' 		=> '2015-12-25',
				'vote_stop'			=> '2015-12-29',
				'activity_rule'		=> '奥朗德在对全国的讲话中称，他已经启动了紧急状态并关闭了法国所有边境口岸，法国正经历史无前例的恐怖袭击。“我们必须体现出同情心和团结一致，我们必须展现团结保持冷静，法兰西必须坚强。“',
				'award_site'		=> '1等奖一名，2等奖两名，3等奖三名',
				'display' 			=> true
			]);

			Project::create([
				'sign_up_total' 	=> 1000,
				'vote_total' 		=> 1000,
				'view_total'		=> 10013,
				'title' 			=> '立于不败明星企业家',
				'content'			=> '本活动仅限山政大学生参加，男女不限，还望大家积极报名，奖品丰富',
				'sign_up_start'		=> '2015-12-25',
				'sign_up_stop'		=> '2015-12-29',
				'vote_start' 		=> '2015-12-25',
				'vote_stop'			=> '2015-12-29',
				'activity_rule'		=> '奥朗德在对全国的讲话中称，他已经启动了紧急状态并关闭了法国所有边境口岸，法国正经历史无前例的恐怖袭击。“我们必须体现出同情心和团结一致，我们必须展现团结保持冷静，法兰西必须坚强。“',
				'award_site'		=> '1等奖一名，2等奖两名，3等奖三名',
				'display' 			=> false
			]);
	}

}