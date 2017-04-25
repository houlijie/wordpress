<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
use App\User;
use DB;

class userController extends Controller
{
    public function updatePsw(Request $request, $id) {
        $user = User::findorFail($id);

        $user->fil([
            'secret' => Crypt::encrypt($request->secret)
        ])->save();
    }

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

    public function upload(Request $request) {

        //验证文件在请求中是否存在
        if($request->hasFile('photo')) {
            //
        }

        //验证文件在上传过程中是否出错
        if($request->file('photo')->isValid()) {
            $destinationPath = app_env('/');
            $request->file('photo')->move($destinationPath, $filname);
        }

    }
}
