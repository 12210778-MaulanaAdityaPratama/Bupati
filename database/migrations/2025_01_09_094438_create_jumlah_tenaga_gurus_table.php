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
        Schema::create('jumlah_tenaga_guru', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->integer('sd')->nullable(); // Jumlah guru tingkat SD
            $table->integer('sltp')->nullable(); // Jumlah guru tingkat SLTP
            $table->integer('slta')->nullable(); // Jumlah guru tingkat SLTA
            $table->integer('negeri')->nullable(); // Jumlah guru status NEGERI
            $table->integer('swasta')->nullable(); // Jumlah guru status SWASTA
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_tenaga_guru');
    }
};
