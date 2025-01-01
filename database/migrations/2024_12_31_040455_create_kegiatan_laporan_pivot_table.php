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
        Schema::create('kegiatan_laporan_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laporan_camat_id');
            $table->unsignedBigInteger('kegiatan_id');
            $table->timestamps();
            $table->foreign('laporan_camat_id')->references('id')->on('laporan_camat')->onDelete('cascade');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_laporan_pivot');
    }
};
