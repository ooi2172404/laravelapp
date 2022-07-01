<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kouka1_2Request;

class Kouka1_2Controller extends Controller
{
    public function index()
    {
        return view('___(5)___');
    }

    public function post(___(6)___  $request)
    {
        //全データの取得
        $data = $request->all();

        return view('___(7)___', ['data' => $data]);
    }
}