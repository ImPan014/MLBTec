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
        Schema::table('juegos', function (Blueprint $table) {
            $table->foreign("id_temporada")
            ->references("id_temporada")
            ->on("temporadas")
            ->onDelete('cascade');;

            $table->foreign("id_campo")
            ->references("id_campo")
            ->on("parques")
            ->onDelete('cascade');;

            $table->foreign("id_equipo_visitante")
            ->references("id_equipo")
            ->on("equipos")
            ->onDelete('cascade');;

            $table->foreign("id_equipo_local")
            ->references("id_equipo")
            ->on("equipos")
            ->onDelete('cascade');;

            $table->foreign("id_aviso")
            ->references("id_aviso")
            ->on("avisos")
            ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('juegos', function (Blueprint $table) {
             // Eliminar llave foránea
             $table->dropForeign(['id_temporada']);

             // Eliminar columna de llave foránea
             $table->dropColumn('id_temporada');

              // Eliminar llave foránea
              $table->dropForeign(['id_campo']);

              // Eliminar columna de llave foránea
              $table->dropColumn('id_campo');

               // Eliminar llave foránea
             $table->dropForeign(['id_aviso']);

             // Eliminar columna de llave foránea
             $table->dropColumn('id_aviso');

              // Eliminar llave foránea
              $table->dropForeign(['id_equipo_visitante']);

              // Eliminar columna de llave foránea
              $table->dropColumn('id_equipo_visitante');

               // Eliminar llave foránea
             $table->dropForeign(['id_equipo_local']);

             // Eliminar columna de llave foránea
             $table->dropColumn('id_equipo_local');
             
        });
    }
};
