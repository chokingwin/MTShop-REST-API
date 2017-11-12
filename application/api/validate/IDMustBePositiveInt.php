<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Date: 2017/8/14
 * Time: 12:24
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id.require' => 'id参数是必要的',
        'id.isPositiveInteger' => 'id必须是正整数',
    ];
}