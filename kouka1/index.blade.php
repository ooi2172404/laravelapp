@extends('___(4)___')

@section('title', '___(5)___')


@section('menu_title')
フレームワークについて
@endsection

@section('menu_content')

@component('___(6)___')
@slot('menu_title')
他のWEBアプリケーションとの比較と動向
@endslot

@slot('menu_content')
<p>バックエンドフレームワークにおいて、PHPのLaravel、PythonのDjango、RubyのRuby on Railsが３大バックエンドフレームワークと見なされることもある。</p>
@endslot
@endcomponent
@endsection

@section('content')

@___(7)___('___(8)___', ['___(9)___'=>'Laravelの名前の由来',
'___(10)___'=>'Laravelの名前は「ナルニア国物語」に登場するナルニア王国の王都、ケア・パラベルにちなむ。'])
@endsection


@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
