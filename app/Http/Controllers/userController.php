<?php

namespace App\Http\Controllers;

use App\User;

class userController extends Controller
{
    /**
     *获取用户列表
     *
     */
    public function getList() {
        $list = [];

        return $list;
    }


    /**
     *获取用户详情
     *
     */
    public function userInfo($userId) {
        
        return User::findorFail($userId);
    }
}
