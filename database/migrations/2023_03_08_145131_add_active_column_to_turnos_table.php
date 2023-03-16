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
        Schema::table('turnos', function (Blueprint $table) {
            $table->foreign("id_juego")
            ->references("id_juego")
            ->on("juegos")
            ->onDelete('cascade');;

            $table->foreign("id_equipo")
            ->references("id_equipo")
            ->on("equipos")
            ->onDelete('cascade');;

            $table->foreign("id_afiliacion")
            ->references("id_afiliacion")
            ->on("jugadores")
            ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('turnos', function (Blueprint $table) {
            // Eliminar llave foránea
            $table->dropForeign(['id_juego']);

            // Eliminar columna de llave foránea
            $table->dropColumn('id_juego');

             // Eliminar llave foránea
             $table->dropForeign(['id_equipo']);

             // Eliminar columna de llave foránea
             $table->dropColumn('id_equipo');

             // Eliminar llave foránea
             $table->dropForeign(['id_afiliacion']);

             // Eliminar columna de llave foránea
             $table->dropColumn('id_afiliacion');
        });
    }
};
