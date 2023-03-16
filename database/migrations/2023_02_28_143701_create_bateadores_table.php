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
        Schema::create('bateadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_afiliacion');
            $table->integer('ab');
            $table->integer('c');
            $table->integer('h');
            $table->integer('cp');
            $table->integer('bb');
            $table->integer('k');
            $table->integer('pje');
            $table->integer('obp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bateadores');
    }
};
