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
        $result = $product->with(['img', 'img.img', 'productCategory'])
//            ->with(['productCategory.img' => function ($query) {
//                $query->order_by('order desc');
//            }])
            ->with(['productCategory.img'])
            ->with(['productCategory.img.img'])
            ->where('p_num', '=', $id)
            ->find();
        return $result;
    }
}