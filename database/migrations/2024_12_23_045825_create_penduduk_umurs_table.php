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
        Schema::create('penduduk_umur', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->integer('thn_0_4thn')->nullable();
            $table->integer('thn_5_9thn')->nullable();
            $table->integer('thn_10_14thn')->nullable();
            $table->integer('thn_15_19thn')->nullable();
            $table->integer('thn_20_24thn')->nullable();
            $table->integer('thn_25_29thn')->nullable();
            $table->integer('thn_30_34thn')->nullable();
            $table->integer('thn_35_39thn')->nullable();
            $table->integer('thn_40_59thn')->nullable();
            $table->integer('thn_60thn')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_umur');
    }
};
