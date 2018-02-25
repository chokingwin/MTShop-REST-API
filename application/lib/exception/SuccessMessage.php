<?php
/**
 * Author: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2018/2/25 0025
 * Time: 13:55
 */

namespace app\lib\exception;


class SuccessMessage extends BaseException
{
    public $code = 201;
    public $msg = 'ok';
    public $errorCode = 0;
}