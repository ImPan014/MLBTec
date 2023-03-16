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
        Schema::table('ampayers_juego', function (Blueprint $table) {
            $table->foreign("id_ampayer")
            ->references("id_ampayer")
            ->on("ampayer")
            ->onDelete('cascade');;

            $table->foreign("id_juego")
            ->references("id_juego")
            ->on("juegos")
            ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ampayers_juego', function (Blueprint $table) {
            // Eliminar llave foránea
            $table->dropForeign(['id_ampayer']);

            // Eliminar columna de llave foránea
            $table->dropColumn('id_ampayer');

            // Eliminar llave foránea
            $table->dropForeign(['id_juego']);

            // Eliminar columna de llave foránea
            $table->dropColumn('id_juego');
        });
    }
};
