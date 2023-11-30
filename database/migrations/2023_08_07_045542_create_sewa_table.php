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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_sewa');
            $table->foreignId('idbarang');
            $table->string('penyewa');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('nilai_sewa');
            $table->string('legalitas');
            $table->date('tgl_kembali');
            $table->string('qty');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
