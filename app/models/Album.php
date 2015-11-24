<?php

class Album extends \Eloquent {
	
	protected $table = 'album';
	protected $fillable = [
		'title',
		'image_url',
		// 'sequence',
		// 'type'
	];

	// public function album()
 //    {
 //        return $this->hasMany('Photograph','album_id','id');
 //    }
}