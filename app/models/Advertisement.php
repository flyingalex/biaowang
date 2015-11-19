<?php

class Advertisement extends \Eloquent {
	
	protected $table = 'advertisement';

	protected $fillable = [
		'image_url',
		'title',
		'sequence',
		// 'display',
		'type'
	];
}