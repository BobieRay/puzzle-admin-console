<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1人目のデータの登録
        Item::create([
            'item_name' => 'スタミナミン',
            'class' => '消耗品',
            'effect' => 3,
            'Description' => '少し回復する'
        ]);

        // 2人目のデータの登録
        Item::create([
            'item_name' => 'コンティニューミン',
            'class' => '消耗品',
            'effect' => 10,
            'Description' => 'かなり回復する'
        ]);
    }
}
