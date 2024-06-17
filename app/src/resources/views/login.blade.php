<html lang="ja">
<body>
<h1>■ログイン■</h1>
<form method="post" action="{{url('/accounts/dologin')}}">
    @csrf
    <label>ユーザー名:<input type="text" name="name" required></label><br>        <!-- ユーザー名登録 -->
    <label>パスワード:<input type="password" name="password" required></label><br>    <!-- パスワード登録 -->
    <label><input type="submit" name="btn_submit" value="ログイン"></label>           <!-- ログインボタン -->
    <input type="hidden" name="action" value="dologin">
</form>
</body>
</html>
