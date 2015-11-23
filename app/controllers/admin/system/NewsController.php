<?php 

class NewsController extends BaseController{

	public function index()
	{
		
	}

	public function createAndEdit()
	{
		if( Input::has('news_id') )
		{
			$news = News::find( Input::get('news_id') );
			if( !isset( $news ) )
				return Response::json( BiaoException::$notExist );
		}else{
				$news = new News;
		}

		$content = Input::get('content');
		//判空
		$arr = array( $content );
		if( InputController::isNullInArray( $arr ) )
			return Response::json( BiaoException::$parameterIncomplete );
		
		$news->content = $content;
		if( !$news->save() )
			return Response::json( BiaoException::$databaseErr );
		return Response::json( BiaoException::$ok );	
	}

	public function delete()
	{
		$news = News::find( Input::get('news_id') );
		if( !isset( $news ) )
			return Response::json( BiaoException::$notExist );
		$news->delete();
		return Response::json( BiaoException::$ok );
	}

	public function index()
	{
		$news = News::all();
		return View::make('')->with(['videos'=>$vedios]);
	}
}
