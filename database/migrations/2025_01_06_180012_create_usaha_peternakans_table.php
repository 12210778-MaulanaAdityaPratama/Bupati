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
        Schema::create('usaha_peternakan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('peternakan_besar')->nullable();
            $table->string('peternakan_kecil')->nullable();
            $table->string('ternak_unggas')->nullable();
            $table->string('pemotongan_ayam')->nullable();
            $table->string('pakan_ternak')->nullable();
            $table->string('usaha_bibit')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usaha_peternakan');
    }
};
