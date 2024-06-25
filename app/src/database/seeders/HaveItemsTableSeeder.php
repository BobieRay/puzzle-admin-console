<?php

namespace Database\Seeders;

use App\Models\HaveItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaveItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1人目のデータ登録
        HaveItem::create([
            'player_id' => 1,
            'item_id' => 1,
            'haveNum' => 5
        ]);

        // 2人目のデータ登録
        HaveItem::create([
            'player_id' => 1,
            'item_id' => 2,
            'haveNum' => 3
        ]);

        // 3人目のデータ登録
        HaveItem::create([
            'player_id' => 2,
            'item_id' => 1,
            'haveNum' => 4
        ]);

        // 4人目のデータ登録
        HaveItem::create([
            'player_id' => 2,
            'item_id' => 2,
            'haveNum' => 3
        ]);
    }
}
