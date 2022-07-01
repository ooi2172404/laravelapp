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


use Illuminate\Support\Facades\Route;
//問題1
Route::get('kouka1_1', 'Kouka1_1Controller@index');
//問題2
Route::get('___(1)___', '___(2)___');
Route::post('___(3)___', '___(4)___');
