<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $param = ['message' => 'ログインして下さい。'];
        return view('jissyu7_1.login', $param);
    }


    public function post(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return view('jissyu7_1.index');
        } else {
            $msg = 'ログインに失敗しました。';
            return view('jissyu7_1.login', ['message' => $msg]);
        }
    }
}
