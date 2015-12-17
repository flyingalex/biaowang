<?php 
class TitleController extends BaseController{

	public function titleEdit()
	{	
		$title = Title::first();
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
		return View::make('admin.pages.official.title.edit-title')
							->with([
								'title'			=> $title,
								'column_titles' => $column_titles
								]);
	}

	public function edit()
	{
		$title_id = Input::get('title_id');
		$title = Title::find( $title_id );
		if( !isset( $title ))
			return Response::json( BiaoException::$notExist );
		if( Input::has('middle_title') )
			$title->middle_title = Input::get('middle_title');
		if( Input::has('middle_subtitle') )
			$title->middle_subtitle = Input::get('middle_subtitle');
		if( Input::has('bottom_title') )
					$title->bottom_title = Input::get('bottom_title');
		if( Input::has('bottom_subtitle') )
					$title->bottom_subtitle = Input::get('bottom_subtitle');
		if( !$title->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );

	}

	public function index()
	{	
		$title = Title::first();
		if( !isset( $title ) )
		{
			$title = new Title;
			$title->save();
		}
		return View::make('')->with([ 'title'=>$title ]);
	}

}