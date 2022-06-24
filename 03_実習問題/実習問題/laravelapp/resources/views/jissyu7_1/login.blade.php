@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザログイン画面
@endsection

@section('content')
<p>{{$message}}</p>
   <form action="/login/auth" method="post">
   <table>
      @csrf
      <tr><th>mail: </th><td><input type="text"
            name="email"></td></tr>
      <tr><th>pass: </th><td><input type="password"
            name="password"></td></tr>
      <tr><th></th><td><input type="submit"
            value="send"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
