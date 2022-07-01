<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
//問題1
Route::get('kouka1_1', 'Kouka1_1Controller@index');
//問題2
Route::get('___(1)___', '___(2)___');
Route::post('___(3)___', '___(4)___');
=======
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
>>>>>>> 69babed17711604eb3a1bd14fc7ea5918b1a245c
