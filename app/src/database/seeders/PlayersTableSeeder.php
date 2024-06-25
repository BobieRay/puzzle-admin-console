<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1人目のデータ登録
        Player::create([
            'player_name' => 'るい',
            'level' => 5,
            'exp' => 15,
            'life' => 6
        ]);

        // 2人目のデータの登録
        Player::create([
            'player_name' => 'そーま',
            'level' => 7,
            'exp' => 50,
            'life' => 3
        ]);


    }
}
