<?php
/**
 * 功能
 * @author easy
 * @since  2019-08-07
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {



    public function home() {
        return "welcome to gym by easy";
    }

//
//    public function gymList() {
//        $gymList  = ["superHero","superMokey","东田健身","火辣健身"];
//        return json_encode($gymList);
//    }


    /**
     * 显示应用程序中所有用户的列表。
     *
     * @return Response
     */
    public function gymList()
    {
        $users = DB::select('select * from `user`', []);


        foreach ($users as $user) {
            echo $user->user_id;
            echo $user->res;
        }
    }
}