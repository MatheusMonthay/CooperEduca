<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weekly_top3_history', function (Blueprint $table) {
            $table->id();
            $table->date('week_start_date')->unique();
            $table->json('top3_users'); // Armazenará IDs, nomes e XP dos top 3
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_top3_history');
    }
};
