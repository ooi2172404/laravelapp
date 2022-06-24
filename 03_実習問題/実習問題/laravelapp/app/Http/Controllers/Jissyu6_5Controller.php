<?php

namespace App\Http\Controllers;

use App\Person;
use App\Subject;

class Jissyu6_5Controller extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('jissyu6_5.index', ['items' => $items]);
    }

    public function show()
    {
        $items = Person::all();
        return view('jissyu6_5.show', ['items' => $items]);
    }

    public function belong(){
        $items = Subject::with('person')->get();
        return view('jissyu6_5.belong', ['items' => $items]);
    }

    public function has(){
        $hasItems = Person::has('subjects')->get();
        $noItems = Person::doesntHave('subjects')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('jissyu6_5.has', $param);
    }

    public function with(){
        $items = Subject::with('person')->get();
        return view('jissyu6_5.with', ['items' => $items]);
    }

}
