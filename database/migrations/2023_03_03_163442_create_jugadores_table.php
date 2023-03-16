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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id('id_afiliacion');
            $table->text('nombre');
            $table->text('apellidos');
            $table->date('fecha_nac');
            $table->text('curp',18);
            $table->text('posicion',3);
            $table->text('golpea');
            $table->text('tira');
            $table->text('pagina');
            $table->text('abreviacion');
            $table->integer('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
