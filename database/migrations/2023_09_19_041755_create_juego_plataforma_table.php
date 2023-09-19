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
        Schema::create('juego_plataforma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juego_id');
            $table->foreign('juego_id')->references('id')->on('juegos');
            $table->unsignedBigInteger('plataforma_id');
            $table->foreign('plataforma_id')->references('id')->on('plataformas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego_plataforma');
    }
};
