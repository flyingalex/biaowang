<?php 
class Title extends \Eloquent{

		$table = 'titles';
		$fillable = array(
			'middle_title',
			'middle_subtitle',
			'bottom_title',
			'bottom_subtitle'
		);
}