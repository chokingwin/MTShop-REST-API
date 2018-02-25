<?php
/**
 * Author: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2018/2/25 0025
 * Time: 13:21
 */

namespace app\api\validate;


class LoginValidate extends BaseValidate
{
    protected $rule = [
        'username' => 'require',
        'password' => 'require'
    ];

    protected $formFiled = [
        'username' => '',
        'password' => ''
    ];
}