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
        Schema::create('profile', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kode')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('tahun')->nullable();
            $table->string('dasar_hukum')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('peta_resmi')->nullable();
            $table->string('utara')->nullable();
            $table->string('timur')->nullable();
            $table->string('selatan')->nullable();
            $table->string('barat')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
