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
        Schema::create('have_items', function (Blueprint $table) {
            $table->id();                              // idカラム
            $table->integer('player_id');       // プレイヤーのidカラム
            $table->integer('item_id');         // アイテムのidカラム
            $table->integer('haveNum');         // 所持個数カラム
            $table->timestamps();                      // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('have_items');
    }
};
