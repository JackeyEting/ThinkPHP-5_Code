<?php
namespace app\common\lib\exception;

use think\Exception;

/**
* 这个错误类是改变 http 状态码用的
*/
class ApiException extends Exception
{
	public $message = '';
	public $httpCode = 500;
	public $code = 0;

	public function __construct($message = '', $httpCode = 0, $code = 0){
		$this->httpCode = $httpCode;
		$this->message = $message;
		$this->code = $code;
	}
}