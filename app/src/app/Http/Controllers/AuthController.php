<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ログイン画面を表示する
    public function login(Request $request)
    {
        return view('accounts/login');
    }

    // ログイン処理
    public function dologin(Request $request)
    {
        Debugbar::info('ばぐ');
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'password' => ['required']
        ]);

        // 条件を指定して取得
        $account = Account::where('name', '=', $request['name'])->get();

        if ($account->count() > 0) {
            Debugbar::info($account[0]['password']);
            if (Hash::check($request['password'], $account[0]['password'])) {
                return redirect('accounts/index');
            }
        }
        return redirect()->route('login', ['error' => 'invalid']);
    }

    // ログアウト処理
    public function dologout(Request $request)
    {
        return redirect('/');
    }
}
