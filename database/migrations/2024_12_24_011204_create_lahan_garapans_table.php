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
        Schema::create('lahan_garapan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kecamatan');
            $table->float('padi')->nullable();
            $table->float('jagung')->nullable();
            $table->float('ubi_kayu')->nullable();
            $table->float('kacang_panjang')->nullable();
            $table->float('kangkung')->nullable();
            $table->float('cabe')->nullable();
            $table->float('jeruk_nipis')->nullable();
            $table->float('terong')->nullable();
            $table->float('mentimun')->nullable();
            $table->float('talas')->nullable();
            $table->float('tomat')->nullable();
            $table->float('kacang_tahan')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahan_garapan');
    }
};
