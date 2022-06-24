<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Person;

class HelloController extends Controller
{
    public function index(Request $request)
    {
       $sort = $request->sort;
       $items = Person::orderBy($sort, 'asc')
           ->paginate(5);
       $param = ['items' => $items, 'sort' => $sort];
       return view('hello.index', $param);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
            ->whereRaw(
                'age >= ? and age <= ?',
                [$min, $max]
            )->get();
        return view('hello.show', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        //DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        //$param = ['id' => $request->id];
        //$item = DB::select('select * from people where id = :id', $param);
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        //DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }
    public function del(Request $request)
    {
        //$param = ['id' => $request->id];
        //$item = DB::select('select * from people where id = :id', $param);
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        //$param = ['id' => $request->id];
        //DB::delete('delete from people where id = :id', $param);
        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/hello');
    }
    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}
