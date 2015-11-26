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

	public static $inputErr;
	public static $accountOrPasswordErr;
	public static $mimeErr;
	public static $fileSizeErr;
	public static $fileUnvalid;
	public static $fileStorageErr;
	public static $noTitle;
	public static $noFile;
	public static $databaseErr;
	public static $notExist;
	public static $noUrl;
	public static $isNotUnique;
	public static $parameterIncomplete;
	public static $regularNotMatch;
	public static $dateWrong;
	public static $displayStatusHasTrue;
	public static $passwordErr;
	public static $repasswordErr;
	public static $passwordNotEqual;
	public static $advertTypeErr;
	public static $timeOut;
}

BiaoException::$ok 						= (new BiaoException('0','正常'))->getArray(); 

//前端错误
BiaoException::$noProject 				= (new BiaoException('pro01','没有此项目'))->getArray();  
BiaoException::$noWork 					= (new BiaoException('work01','没有此作品'))->getArray();  
BiaoException::$workIsNotInThisProject 	= (new BiaoException('work02','作品不属于此项目'))->getArray();  
BiaoException::$voted 					= (new BiaoException('vote01','已经投过票'))->getArray();  
BiaoException::$isNotInt 				= (new BiaoException('type01','非整型'))->getArray();  
BiaoException::$sequenceTypeWrong		= (new BiaoException('sequence01','无此类排序'))->getArray();
BiaoException::$noContent				= (new BiaoException('content01','无内容'))->getArray();

//后台管理
BiaoException::$inputErr				= (new BiaoException('input01','无输入内容'))->getArray();
BiaoException::$accountOrPasswordErr	= (new BiaoException('auth01','密码或账户错误'))->getArray();
BiaoException::$mimeErr					= (new BiaoException('file01','非图片格式文件'))->getArray();
BiaoException::$fileSizeErr				= (new BiaoException('file02','图片过大'))->getArray();
BiaoException::$fileUnvalid				= (new BiaoException('file03','无效图片'))->getArray();
BiaoException::$fileStorageErr			= (new BiaoException('file04','存储文件错误'))->getArray();
BiaoException::$noFile					= (new BiaoException('file05','请传入文件'))->getArray();
BiaoException::$noTitle	 				= (new BiaoException('title01','请输入标题'))->getArray();
BiaoException::$databaseErr	 			= (new BiaoException('database01','数据库错误'))->getArray();
BiaoException::$notExist	 			= (new BiaoException('database02','数据库不存在此数据'))->getArray();
BiaoException::$noUrl	 				= (new BiaoException('url01','请输入外链'))->getArray();
BiaoException::$isNotUnique	 			= (new BiaoException('unique01','排序号重复，请重新输入'))->getArray();
BiaoException::$parameterIncomplete	 	= (new BiaoException('param01','参数填写不完整'))->getArray();
BiaoException::$regularNotMatch 		= (new BiaoException('regular01','时间格式错误，请重新输入'))->getArray();
BiaoException::$dateWrong 				= (new BiaoException('date01','日期输入错误'))->getArray();
BiaoException::$displayStatusHasTrue 	= (new BiaoException('display01','请先关闭其他的显示'))->getArray();
BiaoException::$passwordErr 			= (new BiaoException('password01','密码错误，请重新填写原密码'))->getArray();
BiaoException::$repasswordErr 			= (new BiaoException('re_password01','重置密码需要6位以上且为字母、数字、破折号（-）以及底线（_）'))->getArray();
BiaoException::$passwordNotEqual 		= (new BiaoException('password02','两次重置密码不一致'))->getArray();
BiaoException::$advertTypeErr 			= (new BiaoException('advertType01','广告归类错误，请重新归类'))->getArray();
BiaoException::$timeOut 				= (new BiaoException('timeOut01','投票已结束，请等待下一轮投票'))->getArray();

