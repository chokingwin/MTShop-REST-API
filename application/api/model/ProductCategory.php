<?php
/**
 * Created by PhpStorm.
 * User: chokingwin
 * Date: 2017/11/12
 * Time: 14:28
 */

namespace app\api\model;


class ProductCategory extends BaseModel
{
    public function img()
    {
        return $this->hasMany('ProductCategoryImage', 'product_category_id', 'id');
    }

    public function getSpecAttr($value, $data)
    {
        $arr = [
            [
                'type' => 'circle',
                'name' => '颜色',
                'value' => [
                    [
                        'title' => '黑色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/DDDD334EE9E667503425B40CC9C0320B/20X20.jpg'
                    ],
                    [
                        'title' => '花灰色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/DAAB83312CD86EA464FDC1CB447B37C4/20X20.jpg'
                    ],
                    [
                        'title' => '藏蓝色',
                        'url' => 'http://img01.smartisanos.cn/attr/v2/1000339/C7AB93C2D0B8D95951186FDCB809894E/20X20.jpg'
                    ]
                ]
            ],
            [
                'type' => 'rectangle',
                'name' => '尺码',
                'value' => [
                    [
                        'title' => 'S',
                        'name' => 'S'
                    ],
                    [
                        'title' => 'M',
                        'name' => 'M'
                    ],
                    [
                        'title' => 'L',
                        'name' => 'L'
                    ],
                    [
                        'title' => 'XL',
                        'name' => 'XL'
                    ],
                    [
                        'title' => 'XXL',
                        'name' => 'XXL'
                    ]
                ]
            ]
        ];
//        return json_encode($arr);
        return json_decode($value, true);
    }
}