<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class JissyuCookie1 extends Controller{
  // cookieメソッド
  public function cookie()
  {
    //Cookieの保持時間（1分）
    $time=1;
    //Cookieから値を取得
    $value = Cookie::get('counter');
    // 取得出来たかのチェック 
    if($value == null){
      $value="0";
    }else{
      $value=(int)$value+1;
    }
    //Cookie添付
    Cookie::queue('counter',$value,$time);
    return view('cookie',['value'=>$value]);
  }
}