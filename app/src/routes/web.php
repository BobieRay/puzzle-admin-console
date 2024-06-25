<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HaveItemController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'login'])->name('login');

// アカウントコントローラークラスからログイン処理の情報を送る
Route::post('auth/dologin', [AuthController::class, 'dologin'])->name('dologin');

// アカウントコントローラークラスからログアウト処理の情報送る
Route::post('auth/dologout', [AuthController::class, 'dologout'])->name('dologout');

// アカウントコントローラークラスからアカウント一覧表示の全ての人の情報or特定のIDの情報を取得
Route::get('accounts/index/{account_id?}', [AccountController::class, 'index'])->name('accounts.index');

// アイテムコントローラークラスからアイテム一覧表示の全ての情報を取得
Route::get('items/index', [ItemController::class, 'index'])->name('items.index');

// プレイヤーコントローラークラスからプレイヤー一覧表示の全ての情報を取得
Route::get('players/index', [PlayerController::class, 'index'])->name('players.index');

// 所持アイテムコントローラークラスから所持アイテム一覧表示の全ての情報を取得
Route::get('haveItems/index', [HaveItemController::class, 'index'])->name('haveItems.index');

