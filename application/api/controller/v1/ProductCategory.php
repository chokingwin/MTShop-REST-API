<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Date: 2017/11/12
 * Time: 14:27
 */

namespace app\api\controller\v1;

use app\api\model\ProductCategory as ProductCategoryModel;

use app\api\controller\BaseController;

class ProductCategory extends BaseController
{
    public function create()
    {
        $product_category = new ProductCategoryModel();
        $arr = [
            [
                'type' => 'circle',
                'name' => '颜色',
                'spec_id' => '1',
                'value' => [
                    [
                        'title' => '黑色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/DDDD334EE9E667503425B40CC9C0320B/20X20.jpg',
                        'spec_value_id' => '01'
                    ],
                    [
                        'title' => '花灰色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/DAAB83312CD86EA464FDC1CB447B37C4/20X20.jpg',
                        'spec_value_id' => '02'
                    ],
                    [
                        'title' => '藏蓝色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/C7AB93C2D0B8D95951186FDCB809894E/20X20.jpg',
                        'spec_value_id' => '03'
                    ]
                ]
            ],
            [
                'type' => 'rectangle',
                'name' => '尺码',
                'spec_id' => '2',
                'value' => [
                    [
                        'title' => 'S',
                        'name' => 'S',
                        'spec_value_id' => '01'
                    ],
                    [
                        'title' => 'M',
                        'name' => 'M',
                        'spec_value_id' => '02'
                    ],
                    [
                        'title' => 'L',
                        'name' => 'L',
                        'spec_value_id' => '03'
                    ],
                    [
                        'title' => 'XL',
                        'name' => 'XL',
                        'spec_value_id' => '04'
                    ],
                    [
                        'title' => 'XXL',
                        'name' => 'XXL',
                        'spec_value_id' => '05'
                    ]
                ]
            ],
            [
                'type' => 'num',
                'name' => '数量',
                'spec_id' => '3',
                'curNum' => '1',
                'maxNum' => '5',
                'minNum' => '1'
            ]
        ];
        $product_category->name = 'Smartisan 卫衣 大爆炸';
        $product_category->summary = '风格简洁、舒适服帖';
        $product_category->spec = json_encode($arr);

        $product_category->save();
        return $product_category->id;
    }
}