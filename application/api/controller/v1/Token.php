<?php
/**
 * Author: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2018/2/25 0025
 * Time: 13:12
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\User as UserService;
use app\api\validate\LoginValidate;
use think\Request;

class Token extends BaseController
{
    public function getUserToken()
    {
        $validate = new LoginValidate();
        $validate->goCheck();

        $userService = new UserService();
        $postData = Request::instance()->param();
        $token = $userService->getToken($postData);

        return $this->successMessage([
            'token' => $token
        ]);
    }
}