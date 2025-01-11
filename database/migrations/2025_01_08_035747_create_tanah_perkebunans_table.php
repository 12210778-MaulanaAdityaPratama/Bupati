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
        Schema::create('tanah_perkebunan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->float('kelapa')->nullable();
            $table->float('karet')->nullable();
            $table->float('kelapa_sawit')->nullable();
            $table->float('coklat')->nullable();
            $table->float('tebu')->nullable();
            $table->float('pinang')->nullable();
            $table->float('sagu')->nullable();
            $table->float('pala')->nullable();
            $table->float('kopi')->nullable();
            $table->float('sahang')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanah_perkebunan');
    }
};
