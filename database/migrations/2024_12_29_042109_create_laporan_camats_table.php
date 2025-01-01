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
        Schema::create('laporan_camat', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->foreignId('penyelenggara_id')
                ->constrained('kategori_penyelenggara')
                ->onDelete('cascade'); // Relasi ke tabel penyelenggara
            $table->date('tanggal'); // Tanggal kegiatan
            $table->time('waktu'); // Waktu kegiatan
            $table->string('bulan');
            $table->string('tahun');
            $table->string('tempat_pelaksanaan'); // Tempat pelaksanaan
            $table->text('keterangan')->nullable(); // Keterangan
            $table->text('kendala')->nullable(); // Kendala
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_camat');
    }
};
