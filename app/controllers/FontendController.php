<?php 

class FontendController extends BaseController{
	/**
	*	检查是否已设置cookie
	*	
	*	@return \Symfony\Component\HttpFoundation\Cookie
	*/
	public function isSetVoteCookie()
	{
		if(!isset( Cookie::get('vote') ) )
		{
			$cookie = Cookie::make( 'vote',json_encode(array()),time()+2628000 ) );
		}
	}

	//投票
	public function vote()
	{
		$this->isSetVoteCookie;
		$cookie = 
	}

	public function votePage()
	{

	}
}