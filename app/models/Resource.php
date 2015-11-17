<?php

class Resource extends \Eloquent {
	
	protected $table = 'resource';
	protected $fillable = [
		'column_title_id',
		'title',
		'content',
		'sequence',
		'url',
		'image_url'
	];
}