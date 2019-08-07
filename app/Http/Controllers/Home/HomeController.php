<?php
/**
 * 功能
 * @author easy
 * @since  2019-08-07
 */

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller {



    public function home() {
        return "welcome to gym";
    }


    public function gymList() {
        $gymList  = ["superHero","superMokey","东田健身","火辣健身"];
        return json_encode($gymList);
    }

}