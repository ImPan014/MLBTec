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
        Schema::create('lanzadores_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_juego');
            $table->unsignedBigInteger('id_afiliacion');
            $table->text('resultado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lanzadores_record');
    }
};
