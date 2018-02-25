<?php

namespace app\api\controller;

use think\Controller;
use app\api\service\Token;

class BaseController extends Controller
{
    protected function checkExclusiveScope()
    {
        Token::needExclusiveScope();
    }

    protected function checkPrimaryScope()
    {
        Token::needPrimaryScope();
    }

    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }

    protected function successMessage($data = null, $errorCode = 0, $msg = 'success')
    {
        return [
            'data' => $data,
            'errorCode' => $errorCode,
            'msg' => $msg
        ];
    }
}