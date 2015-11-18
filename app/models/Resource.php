<?php

class Resource extends \Eloquent {
	
	protected $table = 'resource';
	protected $fillable = [
		'column_title_id',
		'title',
		'brief',
		'sequence',
		'url',
		'image_url'
	];
}