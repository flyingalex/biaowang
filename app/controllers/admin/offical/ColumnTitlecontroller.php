<?php  
class ColumnTitleController extends BaseController{


	public function edit()
	{
		$column_title_id 	= Input::get('column_title_id');
		$classification 	= Input::get('classification');
		$column_title 		= ColumnTitle::find( $column_title_id );
		$column_title->classification = $classification;
		if( !$column_title->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$column_titles = ColumnTitle::all();
		if( count($column_titles) == 0  )
		{	
			for( $i = 0; $i < 5; $i++)
			{
				$column_title = new ColumnTitle;
				$column_title->save();
			}
			$column_titles = ColumnTitle::all();
		}
		return View::make('')->with(['column_titles'=> $column_titles]);
	}
	
}