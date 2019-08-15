<?php
/**
 * 用户信息
 * @author easy
 * @since  2019-08-06
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;


class UserController extends Controller{


    public function showList() {
        $userList = ["easy","zhanglonglong","yuanxiaoyi",'yuanyuan','zhaolin'];
        return json_encode($userList);
    }

    /**
     * 更新指定的用户。
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        echo $id;
    }


}