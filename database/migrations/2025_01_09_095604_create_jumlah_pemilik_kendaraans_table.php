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
        Schema::create('jumlah_pemilik_kendaraan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('nama')->nullable();
            $table->integer('jumlah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_pemilik_kendaraan');
    }
};
