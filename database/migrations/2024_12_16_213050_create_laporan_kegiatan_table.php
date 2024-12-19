<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laporan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laporan_harian_camat_id')
                ->constrained('laporan_harian_camat')
                ->onDelete('cascade');
            $table->foreignId('kegiatan_id')
                ->constrained('kegiatan')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_kegiatan');
    }
};
