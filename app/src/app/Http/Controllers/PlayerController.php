<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
        // プレイヤー一覧表示
        $playres = Player::All();
        return view('players/index', ['players' => $playres]);
    }
}
