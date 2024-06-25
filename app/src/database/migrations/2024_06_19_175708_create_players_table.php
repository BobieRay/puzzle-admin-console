<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();                                    // idカラム
            $table->string('player_name', 20); // 名前カラム
            $table->integer('level');                 // レベルカラム
            $table->integer('exp');                   // 経験値カラム
            $table->integer('life');                  // ライフカラム
            $table->timestamps();                            // created_at, updated_at

            $table->unique('player_name');     // nameにユニーク制約設定
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
