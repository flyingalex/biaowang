<?php

class News extends \Eloquent {
	
	protected $table = 'news';
	protected $fillable = [
		'title',
		'content'
	];
}