<?php

class Project extends \Eloquent {
	
	protected $table = 'project';
	protected $fillable = [
			'sign_up_total',
			'vote_total',
			'view_total',
			'title',
			// 'vote_close',
			'content',
			// 'image_url',
			'sign_up_start',
			'sign_up_stop',
			'vote_start',
			'vote_stop',
			'activity_rule',
			'award_site',
			'display'
	];
}