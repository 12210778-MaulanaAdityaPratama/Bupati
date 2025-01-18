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
        Schema::create('biodata_camat', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_camat');
    }
};
