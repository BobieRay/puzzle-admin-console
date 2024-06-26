<html lang="ja">
<head>
    <title>アカウント一覧画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">アカウント一覧画面</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">アカウント一覧</a></li>
        <li class="nav-item"><a href="{{route('items.index')}}" class="nav-link">アイテム一覧</a></li>
        <li class="nav-item"><a href="{{route('players.index')}}" class="nav-link">プレイヤー一覧</a></li>
        <li class="nav-item"><a href="{{route('haveItems.index')}}" class="nav-link">所持アイテム一覧</a></li>
    </ul>
</header>
<h1>■アカウント一覧■</h1>
<table>
    <tr>
        <th>名前</th>
        <th>パスワード</th>
    </tr>
    @foreach($accounts as $account)
        <tr>
            <td>{{$account['name']}}</td>
            <td>{{$account['password']}}</td>
        </tr>
    @endforeach
</table>
<form method="post" action="{{url('/auth/dologout')}}">
    @csrf
    <label><input type="submit" name="btn_submit" value="ログアウト"></label>   <!-- ログアウトボタン -->
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
