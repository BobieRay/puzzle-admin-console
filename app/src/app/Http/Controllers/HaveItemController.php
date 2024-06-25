<?php

namespace App\Http\Controllers;

use App\Models\HaveItem;
use Illuminate\Http\Request;

class HaveItemController extends Controller
{
    public function index(Request $request)
    {
        // 所持アイテム一覧表示
        $haveItems = HaveItem::select([
            'have_items.id as id',
            'player_name',
            'item_name',
            'haveNum'
        ])
            ->join('players', 'players.id', '=', 'have_items.player_id')
            ->join('items', 'items.id', '=', 'have_items.item_id')
            ->get();
        return view('haveItems/index', ['haveItems' => $haveItems]);
    }
}
