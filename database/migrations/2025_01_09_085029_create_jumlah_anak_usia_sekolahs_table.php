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
        Schema::create('jumlah_anak_usia_sekolah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('kategori'); // Anak Usia Sekolah, Anak Sekolah, Anak Putus Sekolah
            $table->integer('tk')->default(0); // Jumlah TK
            $table->integer('sd')->default(0); // Jumlah SD
            $table->integer('sltp')->default(0); // Jumlah SLTP
            $table->integer('slta')->default(0); // Jumlah SLTA
            $table->integer('perguruan_tinggi')->default(0); // Jumlah Perguruan Tinggi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_anak_usia_sekolah');
    }
};
