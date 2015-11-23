<?php

class Photograph extends \Eloquent {
	
	protected $table = 'photograph';
	protected $fillable = [
		'album_id',
		'title',
		'image_url'
	];

	public function album()
    {
        return $this->belongsTo('Album','album_id','id');
    }
}