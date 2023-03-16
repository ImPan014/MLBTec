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
        Schema::create('lanzadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_juego');
            $table->unsignedBigInteger('id_afiliacion');
            $table->integer('ip');
            $table->integer('ba');
            $table->integer('c');
            $table->integer('h');
            $table->integer('bb');
            $table->integer('k');
            $table->integer('pca');
            $table->integer('pop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lanzadores');
    }
};
