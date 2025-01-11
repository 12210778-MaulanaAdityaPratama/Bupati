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
        Schema::create('luas_hutan_menurut_penggunaan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('jenis_hutan')->nullable();
            $table->string('status')->default('tidak ada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('luas_hutan_menurut_penggunaan');
    }
};
