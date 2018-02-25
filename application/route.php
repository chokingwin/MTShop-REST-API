<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::post('api/:version/token/app', 'api/:version.Token/getAppToken');
Route::post('api/:version/token/verify', 'api/:version.Token/verifyToken');
Route::post('api/:version/token/user', 'api/:version.Token/getUserToken');

// product-category
Route::get('api/:version/product_category/all','api/:version.ProductCategory/get');
Route::post('api/:version/product_category/create', 'api/:version.ProductCategory/create');

// product
Route::get('api/:version/product/:id', 'api/:version.Product/getOne', [], ['id' => '\d+']);