<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')-ホームページ-</title>
</head>
<body>
<h1>@yield('title')へようこそ！</h1>

@yield('header')

@section('content')
    <p>設置コース一覧</p>
@show
</body>
</html>
