<?php

class Photograph extends \Eloquent {
	
	protected $table = 'photograph';
	protected $fillable = [
		'album_id',
		'title',
		'image_url'
	];
}