<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_1Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jissyu4_1.input', $data);
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);

        //全データの取得
        $data = $request->all();

        return view('jissyu4_1.output', ['data' => $data]);
    }
}
