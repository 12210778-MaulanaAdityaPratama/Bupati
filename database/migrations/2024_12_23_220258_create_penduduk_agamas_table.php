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
        Schema::create('penduduk_agama', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->integer('islam')->nullable();
            $table->integer('kristen')->nullable();
            $table->integer('katolik')->nullable();
            $table->integer('hindu')->nullable();
            $table->integer('budha')->nullable();
            $table->integer('konghucu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_agama');
    }
};
