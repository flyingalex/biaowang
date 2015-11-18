<?php 

class BiaoException{

	public $message;
	public $errCode;

	public function __construct($errCode,$message)
	{
		$this->errCode = $errCode;
		$this->message = $message;
	}

	public function getArray()
	{
		return array('errCode'=>$this->errCode,'message'=>$this->message);
	}

	public static $ok;
	public static $noProject;//无此项目
	public static $noWork;  // 无此作品
	public static $workIsNotInThisProject;//作品不属于此项目
	public static $voted; 	//已投票
	public static $isNotInt;
	public static $sequenceTypeWrong;
	public static $noContent;
}

BiaoException::$ok 						= (new BiaoException('0','正常'))->getArray(); 
BiaoException::$noProject 				= (new BiaoException('pro01','没有此项目'))->getArray();  
BiaoException::$noWork 					= (new BiaoException('work01','没有此作品'))->getArray();  
BiaoException::$workIsNotInThisProject 	= (new BiaoException('work02','作品不属于此项目'))->getArray();  
BiaoException::$voted 					= (new BiaoException('vote01','已经投过票'))->getArray();  
BiaoException::$isNotInt 				= (new BiaoException('type01','非整型'))->getArray();  
BiaoException::$sequenceTypeWrong		= (new BiaoException('sequence01','无此类排序'))->getArray();
BiaoException::$noContent				= (new BiaoException('content01','无内容'))->getArray();







