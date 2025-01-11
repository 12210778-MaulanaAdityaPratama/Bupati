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
        Schema::create('tanah_pemda_di_kecamatan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('uraian')->nullable();
            $table->float('jumlah')->nullable();
            $table->integer('sertifikat')->nullable();
            $table->integer('skt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanah_pemda_di_kecamatan');
    }
};
