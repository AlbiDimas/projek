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
        Schema::create('data_lahan', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_lahan');
            $table->string('luas_lahan');
            $table->string('penanggung_jawab');
            $table->string('foto_lahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_lahan');
    }
};
