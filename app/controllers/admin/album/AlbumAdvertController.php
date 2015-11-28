<?php  
class AlbumAdvertController extends BaseController{

	public function add()
	{
		return View::make('admin.pages.album.advert.add-advert');
	}

	public function edit()
	{	
		$advert_id = Input::get('advert_id');
		// $advert_id = 1;
		$advert = Advertisement::find( $advert_id );
		if( !isset( $advert ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		return View::make('admin.pages.album.advert.edit-advert')->with(['advert'=>$advert]);
	}

	public function manage()
	{	
		$adverts = Advertisement::where('type',3)->get();
		return View::make('admin.pages.album.advert.manage-advert')->with(['adverts'=>$adverts]);
	}
}
