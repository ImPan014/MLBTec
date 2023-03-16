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
            $table->id('id_juego');
            $table->unsignedBigInteger('id_temporada');
            $table->unsignedBigInteger('id_campo');
            $table->unsignedBigInteger('id_equipo_visitante');
            $table->unsignedBigInteger('id_equipo_local');
            $table->unsignedBigInteger('id_aviso');
            $table->integer('jornada');
            $table->time('hola');
            $table->date('fecha');
            $table->text('final');
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
