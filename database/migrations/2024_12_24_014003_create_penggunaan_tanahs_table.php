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
        Schema::create('penggunaan_tanah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->float('tanah_sawah')->nullable();
            $table->float('tanah_kering')->nullable();
            $table->float('tanah_basah')->nullable();
            $table->float('tanah_perkebunan')->nullable();
            $table->float('tanah_fasilitas')->nullable();
            $table->float('tanah_hutan')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunaan_tanah');
    }
};
