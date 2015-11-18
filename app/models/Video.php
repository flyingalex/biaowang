<?php

class Video extends \Eloquent {
	
	protected $table = 'video';
	protected $fillable = [
		'title',
		'url',
		'image_url',
		'type'
	];
}