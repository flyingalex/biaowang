<?php

class Album extends \Eloquent {
	
	protected $table = 'album';
	protected $fillable = [
		'title',
		'image_url',
		'sequence',
		'type'
	];
}