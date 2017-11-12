<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2017/11/12
 * Time: 16:14
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ProductException;
use think\Request;
use app\api\service\Product as ProductService;

class Product extends BaseController
{
    public function getOne()
    {
        $validate = new IDMustBePositiveInt();
        $validate->goCheck();

        $id = Request::instance()->param('id');

        $product = new ProductService();
        $result = $product->getDetail($id);
        if(!$result){
            throw new ProductException();
        }
        return $result;
    }
}