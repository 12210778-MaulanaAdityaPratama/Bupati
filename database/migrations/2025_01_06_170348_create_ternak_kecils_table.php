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
        Schema::create('ternak_kecil', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kambing')->nullable();
            $table->string('babi')->nullable();
            $table->string('domba')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ternak_kecil');
    }
};
