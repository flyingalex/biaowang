<?php

class Resource extends \Eloquent {
	
	protected $table = 'resource';
	protected $fillable = [
		'column_title_id',
		'title',
		'brief',
		'sequence',
		'url',
		'image_url'
	];

	public static function getExtremeFromEachColumn( $limit = 3 ){

		if ( !DB::statement( 'set @num := 0, @column_title := 1;' ) ){

			return false;
		}

		$result = DB::select( DB::raw("
	        select *
	        from (
	            select *,
	                @num := if ( @column_title = column_title_id, @num + 1, 1 ) as row_number,
	                @column_title := column_title_id as column_title
	                from resource
	                order by column_title_id, id
	        ) as tmp
	        where tmp.row_number <= 3;
	    "));

	    return $result;
	}
}