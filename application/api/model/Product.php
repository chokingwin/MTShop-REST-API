<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Date: 2017/11/12
 * Time: 14:30
 */

namespace app\api\model;


class Product extends BaseModel
{
    public function img()
    {
        return $this->hasMany('ProductThumbImage', 'product_id', 'id');
    }

    public function productCategory()
    {
        return $this->belongsTo('ProductCategory', 'product_category_id', 'id');
    }
}