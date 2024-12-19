<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanHarianCamatsTable extends Migration
{
    public function up()
    {
        Schema::create('laporan_harian_camat', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->foreignId('penyelenggara_id')->constrained('kategori_penyelenggara')->onDelete('cascade');
            $table->integer('bobot');
            $table->integer('capai');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_harian_camat');
    }
};
