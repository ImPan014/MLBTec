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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id('turno');
            $table->unsignedBigInteger('id_juego');
            $table->unsignedBigInteger('id_equipo');
            $table->unsignedBigInteger('id_afiliacion');
            $table->unsignedBigInteger('inning');
            $table->text('posicion');
            $table->text('resultado');
            $table->text('carerra', 1);
            $table->integer('producciones');
            $table->text('detalles');
            $table->integer('id_lanzador');
            $table->text('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
