<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function login(Request $request)
    {
//        $user = Auth::user();
//        var_dump($user);
//        echo "111";

//        var_dump($is_exists);
//        die();
        $str = "123456788";
        $res = preg_match("/^[0-9a-f]{32}$/",$str);
        var_dump($res);
    }

}
