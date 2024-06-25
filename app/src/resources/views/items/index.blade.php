<!-- アイテム一覧表示 -->
<html lang="ja">
<head>
    <title>アイテム一覧画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">アイテム一覧画面</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('accounts.index')}}" class="nav-link"
                                aria-current="page">アカウント一覧</a></li>
        <li class="nav-item"><a href="{{route('items.index')}}" class="nav-link active">アイテム一覧</a></li>
        <li class="nav-item"><a href="{{route('players.index')}}" class="nav-link">プレイヤー一覧</a></li>
        <li class="nav-item"><a href="{{route('haveItems.index')}}" class="nav-link">所持アイテム一覧</a></li>
    </ul>
</header>
<h1>■アイテム一覧■</h1>
<table class="table table-hover">
    <thead>
    <tr class="table-dark">
        <th scope="row">ID</th>
        <th>名前</th>
        <th>種別</th>
        <th>効果値</th>
        <th>説明</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['item_name']}}</td>
            <td>{{$item['class']}}</td>
            <td>{{$item['effect']}}</td>
            <td>{{$item['Description']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<form method="post" action="{{route('dologout')}}">
    @csrf
    <label><input type="submit" name="btn_submit" value="ログアウト"></label>   <!-- ログアウトボタン -->
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
