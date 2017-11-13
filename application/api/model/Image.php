<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2017/11/12
 * Time: 14:37
 */

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['id', 'from', 'create_time', 'delete_time', 'update_time'];
}