<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // アカウント一覧を表示する
    public function index(Request $request)
    {
        $accounts = Account::All();
        return view('accounts/index', ['accounts' => $accounts]);

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

        //return view('accounts/index', ['title' => $title, 'accounts' => $data]);  // ビューに変数を渡す
    }
}

