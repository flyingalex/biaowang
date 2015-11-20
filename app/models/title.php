<?php 
class Title extends \Eloquent{

		protected $table	 = 'titles';
		protected $fillable  = array(
			'middle_title',
			'middle_subtitle',
			'bottom_title',
			'bottom_subtitle'
		);
}