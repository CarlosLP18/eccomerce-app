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
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->mediumText('descripcion');
            $table->timestamp('fecha_lanzamiento')->nullable();
            $table->boolean('online');
            $table->unsignedBigInteger('clasificacion_id');
            $table->foreign('clasificacion_id')->references('id')->on('clasificacions');
            $table->unsignedBigInteger('plataforma_id');
            $table->foreign('plataforma_id')->references('id')->on('plataformas');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('precio_id');
            $table->foreign('precio_id')->references('id')->on('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
