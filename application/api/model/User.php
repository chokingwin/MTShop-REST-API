<?php
/**
 * Author: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2018/2/25 0025
 * Time: 13:10
 */

namespace app\api\model;


class User extends BaseModel
{
    protected $hidden = ['id', 'create_time', 'delete_time', 'update_time'];


}