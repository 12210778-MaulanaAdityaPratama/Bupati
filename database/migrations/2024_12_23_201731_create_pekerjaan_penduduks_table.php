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
        Schema::create('pekerjaan_penduduk', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->integer('pns')->nullable();
            $table->integer('tni')->nullable();
            $table->integer('polri')->nullable();
            $table->integer('petani')->nullable();
            $table->integer('nelayan')->nullable();
            $table->integer('pedagang')->nullable();
            $table->integer('buruh')->nullable();
            $table->integer('lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaan_penduduk');
    }
};
