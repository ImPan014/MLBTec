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
        Schema::table('lanzadores_record', function (Blueprint $table) {
            $table->foreign('id_juego')
            ->references('id_juego')
            ->on('juegos');;

            $table->foreign('id_afiliacion')
            ->references('id_afiliacion')
            ->on('jugadores');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lanzadores_record', function (Blueprint $table) {
            $table->dropForeign('id_juego');
            $table->dropColumn('id_juego');

            $table->dropForeign('id_afiliacion');
            $table->dropColumn('id_afiliacion');
        });
    }
};
