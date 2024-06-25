<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        // アイテム一覧表示
        $items = Item::All();
        return view('items/index', ['items' => $items]);
    }

}
