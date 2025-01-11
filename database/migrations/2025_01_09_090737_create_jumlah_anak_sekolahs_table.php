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
        Schema::create('jumlah_anak_sekolah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('kategori'); // Anak Usia Sekolah, Anak Sekolah, Anak Putus Sekolah
            $table->integer('sd')->nullable(); // Jumlah TK
            $table->integer('mi')->nullable(); // Jumlah SD
            $table->integer('sltp')->nullable(); // Jumlah SLTP
            $table->integer('mts')->nullable(); // Jumlah SLTA
            $table->integer('slta')->nullable(); // Jumlah Perguruan Tinggi
            $table->integer('aliyah')->nullable(); // Jumlah Perguruan Tinggi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_anak_sekolah');
    }
};
