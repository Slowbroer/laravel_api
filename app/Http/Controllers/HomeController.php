<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendMail(Request $request){
//        return view("email.code",['code'=>Str::random(6)]);
        $res = Mail::send("email.code",['code'=>Str::random(6),'name'=>"您"],function ($message){
            $to = "mj1573975217@outlook.com";
            $message->to($to)->subject("云岫科技注册验证码");
        });
//        var_dump($res);
        if(count(Mail::failures()) > 0)
        {
            echo "发送失败";
        }
        else {
            echo "发送成功，请验收";
        }
    }
}
