<?php

class ActivityAdvertisement extends \Eloquent {
	protected $table = 'activity_advertisement';

	protected $fillable = [
		'title',
		'sub_title',
		'image_url',
		'sequence',
		'display'
	];
}	