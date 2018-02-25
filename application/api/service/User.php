<?php
/**
 * Author: chokingwin
 * Email: 2205405321@qq.com
 * Date: 2018/2/25 0025
 * Time: 13:16
 */

namespace app\api\service;

use app\api\model\User as UserModel;
use app\lib\exception\TokenException;

class User extends Token
{
    public function getToken($data)
    {
        $user = $this->checkRight($data);

        if (!$user) {
            throw new TokenException([
                'code' => 200,
                'msg' => '授权失败',
                'errorCode' => 10004
            ]);
        } else {
            $uid = $user->id;
            $values = [
                'uid' => $uid
            ];
            $token = $this->saveToCache($values);
            return $token;
        }
    }

    private function checkRight($data)
    {
        $userModel = new UserModel();
        $user = $userModel->where('phone', '=', $data['username'])
            ->where('password', '=', $data['password'])
            ->find();
        return $user;
    }

    private function saveToCache($values)
    {
        $token = self::generateToken();
        $expire_in = config('setting.token_expire_in');
        $result = cache($token, json_encode($values), $expire_in);
        if (!$result) {
            throw new TokenException([
                'msg' => '服务器缓存异常',
                'errorCode' => 10005
            ]);
        }
        return $token;
    }
}