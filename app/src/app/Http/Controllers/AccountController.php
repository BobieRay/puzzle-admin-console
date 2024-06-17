<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // アカウント一覧を表示する
    public function index(Request $request)
    {
        $title = 'アカウント一覧';

        $data = [
            [
                'name' => 'しょうきさん',
                'password' => 'abc',
            ],
            [
                'name' => 'jobi',
                'password' => '$9$s#2kdie',
            ]
        ];

        // セッションに指定のキーで値を保存
        $request->session()->put('shoki', 1);

        // セッションから指定のキーの値を取得
        $value = $request->session()->get('shoki');

        // 指定したデータをセッションから削除
        $request->session()->forget('shoki');

        // セッションのすべてのデータを削除
        //$request->session()->flush();

        // セッションに指定したキーが存在するか
        if ($request->session()->exists('キー名')) {

        }

        //dd($request->account_id);
        //Debugbar::info('おはようござぁいます');
        //Debugbar::error('エラーでごわすよ');

        return view('accounts/index', ['title' => $title, 'accounts' => $data]);  // ビューに変数を渡す
    }

    // ログイン画面を表示する
    public function login(Request $request)
    {
        return view('login');
    }

    // ログイン処理
    public function dologin(Request $request)
    {
        // 名前がjobi かつ パスワードがjobi だった場合アカウント一覧表示にリダイレクト
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') {
            return redirect('accounts/index');
        } else {
            return view('dologin');
        }
    }

    // ログアウト処理
    public function dologout(Request $request)
    {
        return redirect('accounts/login');
    }
}

