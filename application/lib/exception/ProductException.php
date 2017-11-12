<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2017/11/12
 * Time: 16:21
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = 'product不存在';
    public $errorCode = 20001;
}