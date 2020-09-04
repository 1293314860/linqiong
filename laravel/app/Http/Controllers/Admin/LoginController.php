<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    //显示用户输入的数据
    public function show(Request $request){
        dd($request->input('user'),$request->input('password'));
    }
}
