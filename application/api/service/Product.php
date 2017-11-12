<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2017/11/12
 * Time: 16:16
 */

namespace app\api\service;

use app\api\model\Product as ProductModel;

class Product
{
    public function getDetail($id)
    {
        $product = new ProductModel();
        $result = $product->with(['img','productCategory'])->where('p_num', '=', $id)->find();
        return $result;
    }
}