@extends('layouts.ensyu') 

@section('title', 'Show')

@section('menubar')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>id</th><th>name</th><th>address</th><th>phonenumber</th><th>email</th></tr>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->address}}</td>
           <td>{{$item->phonenumber}}</td>
           <td>{{$item->email}}</td>
       </tr>
   </table>
   <button onclick="location.href='/ensyu1/'">戻る</button>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection

