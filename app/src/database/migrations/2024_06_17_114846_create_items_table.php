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
        Schema::create('items', function (Blueprint $table) {
            $table->id();                                         // idカラム
            $table->string('item_name', 20);        // 名前カラム
            $table->string('class', 20);            // 種別カラム
            $table->integer('effect');                     // 効果値カラム
            $table->string('Description', 100);     // 説明カラム
            $table->timestamps();                                 // created_at, updated_at

            $table->unique('item_name');     // nameにユニーク制約設定
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
