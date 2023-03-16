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
        Schema::table('rosters', function (Blueprint $table) {
            $table->foreign('id_equipo')
            ->references('id_equipo')
            ->on('equipos');;

            $table->foreign('id_temporada')
            ->references('id_temporada')
            ->on('temporadas');;

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
        Schema::table('rosters', function (Blueprint $table) {
            $table->dropForeign('id_equipo');
            $table->dropColumn('id_equipo');

            $table->dropForeign('id_afiliacion');
            $table->dropColumn('id_afiliacion');

            $table->dropForeign('id_temporada');
            $table->dropColumn('id_temporada');
        });
    }
};
