<?php

class Work extends \Eloquent {
	
	protected $table = 'work';
	protected $fillable = [
		'project_id',
		'title',
		'url',
		'vote_number',
		'image_url'
	];
}