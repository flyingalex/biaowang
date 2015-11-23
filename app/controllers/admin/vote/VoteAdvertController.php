<?php  
class VoteAdvertController extends Basecontroller{

	public function add()
	{
		return View::make('admin.pages.vote.advert.add-advert');
	}

	public function edit()
	{	
		// $advert_id = Input::get('advert_id');
		$advert_id = 1;
		$advert = Advertisement::find( $advert_id );
		if( !isset( $advert ) )
			return View::make('errors.error')->with(['error'=>BiaoException::$notExist['message']]);
		return View::make('admin.pages.vote.advert.edit-advert')->with(['advert'=>$advert]);
	}

	public function manage()
	{	
		$adverts = Advertisement::where('type',2)->get();
		return View::make('admin.pages.vote.advert.manage-advert')->with(['adverts'=>$adverts]);
	}
}