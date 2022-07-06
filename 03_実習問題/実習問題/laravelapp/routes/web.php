<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('hello/other', 'HelloController@other');
//->middleware('auth');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show', 'HelloController@show');
Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');
Route::resource('rest', 'RestappController');
Route::get('hello/rest', 'HelloController@rest');
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

//実習関係
Route::get('jissyu2', 'JissyuController@index');
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');
Route::get('jissyu5', 'Jissyu3_3Controller@index');
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');
Route::get('jissyu7', 'Jissyu4_2Controller@index');
Route::post('jissyu7', 'Jissyu4_2Controller@post');
Route::get('jissyu8', 'Jissyu4_3Controller@index');
Route::post('jissyu8', 'Jissyu4_3Controller@post');
Route::get('jissyu9', 'Jissyu4_4Controller@index');
Route::post('jissyu9', 'Jissyu4_4Controller@post');
Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');
Route::get('jissyu12', 'Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'Jissyu5_3Controller@remove');
//実習5_6
Route::get('task', 'TaskController@index');
Route::get('task/add', 'TaskController@add');
Route::post('task/add', 'TaskController@create');
Route::post('task/del', 'TaskController@delete');
//実習6_1.2
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');
//実習6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');
//実習6_4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');
//実習6_5
Route::get('jissyu16', 'Jissyu6_5Controller@index');
Route::get('jissyu16/show', 'Jissyu6_5Controller@show');
//実習6_6
Route::get('jissyu16/belong', 'Jissyu6_5Controller@belong');
Route::get('jissyu16/has', 'Jissyu6_5Controller@has');
Route::get('jissyu16/with', 'Jissyu6_5Controller@with');
//実習7_1
Route::resource('jissyu7_1', 'Jissyu7_1Controller');
Route::post('jissyu7_1/find', 'Jissyu7_1Controller@find');      //Resourcefulにはfind()メソッドはないので追加
Route::get('jissyu7_1/{id}/del', 'Jissyu7_1Controller@del');    //Resourcefulにはdel()メソッドはないので追加
//実習7_3
Route::get('login/auth', 'LoginController@index');
Route::post('login/auth', 'LoginController@post');

//2021/03追加分
Route::get('Chapter3_2', 'Chapter3_1Controller@index');
Route::get('ohara', 'OharaController@index');
Route::get('cookie', 'JissyuCookie1@cookie');
Route::get('ensyu1', 'App\Http\Controllers\HelloController@index');
Route::get('ensyu1/show', 'App\Http\Controllers\HelloController@show');
Route::get('ensyu1/add', 'App\Http\Controllers\HelloController@add');
Route::post('ensyu1/create', 'App\Http\Controllers\HelloController@create');
Route::get('ensyu1/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('ensyu1/update', 'App\Http\Controllers\HelloController@update');
Route::get('ensyu1/del', 'App\Http\Controllers\HelloController@del');
Route::post('ensyu1/remove', 'App\Http\Controllers\HelloController@remove');
