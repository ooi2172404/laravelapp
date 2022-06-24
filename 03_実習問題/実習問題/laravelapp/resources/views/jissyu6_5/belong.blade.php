@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
担当者一覧(belong)画面
@endsection

@section('content')
   <table>
   <tr><th>Data</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData2()}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
