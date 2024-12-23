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
        Schema::create('penduduk_suku', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->integer('jawa')->nullable();
            $table->integer('melayu')->nullable();
            $table->integer('bugis')->nullable();
            $table->integer('dayak')->nullable();
            $table->integer('cina')->nullable();
            $table->integer('sunda')->nullable();
            $table->integer('batak')->nullable();
            $table->integer('madura')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_suku');
    }
};
