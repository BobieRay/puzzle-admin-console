<html lang="ja">
<body>
<h1>■{{$title}}■</h1>
<table>
    <tr>
        <td>名前</td>
        <td>パスワード</td>
    </tr>
</table>
<ul>
    @foreach($accounts as $account)
        <li>{!!$account['name']!!}{{$account['password']}}</li>
    @endforeach
</ul>
<form method="post" action="{{url('/accounts/dologout')}}">
    @csrf
    <label><input type="submit" name="btn_submit" value="ログアウト"></label>   <!-- ログアウトボタン -->
</form>
</body>
</html>
