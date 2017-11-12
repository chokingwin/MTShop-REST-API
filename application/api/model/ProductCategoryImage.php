<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2017/11/12
 * Time: 14:34
 */

namespace app\api\model;


class ProductCategoryImage extends BaseModel
{
    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}