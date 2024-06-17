<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AccountController::class, 'login']);

// アカウントコントローラークラスからログインの情報を取得する
Route::get('accounts/login', [AccountController::class, 'login']);

// アカウントコントローラークラスからログイン処理の情報を送る
Route::post('accounts/dologin', [AccountController::class, 'dologin']);

// アカウントコントローラークラスからアカウント一覧表示の情報を取得する
Route::get('accounts/index', [AccountController::class, 'index']);

// アカウントコントローラークラスからログアウト処理の情報送る
Route::post('accounts/dologout', [AccountController::class, 'dologout']);

// アカウントコントローラークラスからアカウント一覧表示の全ての人の情報or特定のIDの情報を取得
Route::get('accounts/index/{account_id?}', [AccountController::class, 'index']);

