<!-- 所持アイテム一覧表示 -->
<html lang="ja">
<head>
    <title>所持アイテム一覧画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">所持アイテム一覧画面</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('accounts.index')}}" class="nav-link"
                                aria-current="page">アカウント一覧</a></li>
        <li class="nav-item"><a href="{{route('items.index')}}" class="nav-link">アイテム一覧</a></li>
        <li class="nav-item"><a href="{{route('players.index')}}" class="nav-link">プレイヤー一覧</a></li>
        <li class="nav-item"><a href="{{route('haveItems.index')}}" class="nav-link active">所持アイテム一覧</a></li>
    </ul>
</header>
<h1>■所持アイテム一覧■</h1>
<table class="table table-hover">
    <thead>
    <tr class="table-dark">
        <th scope="row">ID</th>
        <th>プレイヤー名</th>
        <th>アイテム名</th>
        <th>所持個数</th>
    </tr>
    </thead>
    <tbody>
    @foreach($haveItems as $haveItem)
        <tr>
            <td>{{$haveItem['id']}}</td>
            <td>{{$haveItem['player_name']}}</td>
            <td>{{$haveItem['item_name']}}</td>
            <td>{{$haveItem['haveNum']}}</td>
        </tr>
    @endforeach
    </tbody>

</table>
<form method="post" action="{{route('dologout')}}">
    @csrf
    <label><input type="submit" name="btn_submit" value="ログアウト"></label>   <!-- ログアウトボタン -->
</form>
</body>
</html>
