<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanCamatController;
use App\Http\Controllers\admin\{
    WilayahController,
    BatasWilayahController,
    JumlahPendudukController,
    LuasKepadatanController,
    PendudukUmurController,
    PekerjaanPendudukController,
    PendudukPendidikanController,
    PendudukAgamaController,
    PendudukSukuController,
    PendudukPertumbuhanController,
    LahanGarapanController,
    PenggunaanTanahController
};

Route::get('/', function () {
    return view('welcome');
});

// Laporan Camat Routes
Route::prefix('laporan-camat')->name('laporan-camat.')->group(function () {
    Route::get('download/{kecamatan}/{bulan}/{tahun}', [LaporanCamatController::class, 'download'])->name('download');
    Route::get('view/{kecamatan}/{bulan}/{tahun}', [LaporanCamatController::class, 'view'])->name('view');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Wilayah Routes
    Route::prefix('wilayah')->name('wilayah.')->group(function () {
        Route::get('/', [WilayahController::class, 'index'])->name('index');
        Route::get('download', [WilayahController::class, 'download'])->name('download');
    });

    // Batas Wilayah Routes
    Route::prefix('batas-wilayah')->name('batas-wilayah.')->group(function () {
        Route::get('/', [BatasWilayahController::class, 'index'])->name('index');
        Route::get('download', [BatasWilayahController::class, 'download'])->name('download');
    });

    // Jumlah Penduduk Routes
    Route::prefix('jumlah-penduduk')->name('jumlah-penduduk.')->group(function () {
        Route::get('/', [JumlahPendudukController::class, 'index'])->name('index');
        Route::get('download', [JumlahPendudukController::class, 'download'])->name('download');
    });

    // Luas Kepadatan Routes
    Route::prefix('luas-kepadatan')->name('luas-kepadatan.')->group(function () {
        Route::get('/', [LuasKepadatanController::class, 'index'])->name('index');
        Route::get('download', [LuasKepadatanController::class, 'download'])->name('download');
    });

    // Penduduk Umur Routes
    Route::prefix('penduduk-umur')->name('penduduk-umur.')->group(function () {
        Route::get('/', [PendudukUmurController::class, 'index'])->name('index');
        Route::get('download', [PendudukUmurController::class, 'download'])->name('download');
    });

    // Pekerjaan Penduduk Routes
    Route::prefix('pekerjaan-penduduk')->name('pekerjaan-penduduk.')->group(function () {
        Route::get('/', [PekerjaanPendudukController::class, 'index'])->name('index');
        Route::get('download', [PekerjaanPendudukController::class, 'download'])->name('download');
    });

    // Penduduk Pendidikan Routes
    Route::prefix('penduduk-pendidikan')->name('penduduk-pendidikan.')->group(function () {
        Route::get('/', [PendudukPendidikanController::class, 'index'])->name('index');
        Route::get('download', [PendudukPendidikanController::class, 'download'])->name('download');
    });

    // Penduduk Agama Routes
    Route::prefix('penduduk-agama')->name('penduduk-agama.')->group(function () {
        Route::get('/', [PendudukAgamaController::class, 'index'])->name('index');
        Route::get('download', [PendudukAgamaController::class, 'download'])->name('download');
    });

    // Penduduk Suku Routes
    Route::prefix('penduduk-suku')->name('penduduk-suku.')->group(function () {
        Route::get('/', [PendudukSukuController::class, 'index'])->name('index');
        Route::get('download', [PendudukSukuController::class, 'download'])->name('download');
    });

    // Penduduk Pertumbuhan Routes
    Route::prefix('penduduk-pertumbuhan')->name('penduduk-pertumbuhan.')->group(function () {
        Route::get('/', [PendudukPertumbuhanController::class, 'index'])->name('index');
        Route::get('download', [PendudukPertumbuhanController::class, 'download'])->name('download');
    });

    // Lahan Garapan Routes
    Route::prefix('lahan-garapan')->name('lahan-garapan.')->group(function () {
        Route::get('/', [LahanGarapanController::class, 'index'])->name('index');
        Route::get('download', [LahanGarapanController::class, 'download'])->name('download');
    });

    // Penggunaan Tanah Routes
    Route::prefix('penggunaan-tanah')->name('penggunaan-tanah.')->group(function () {
        Route::get('/', [PenggunaanTanahController::class, 'index'])->name('index');
        Route::get('download', [PenggunaanTanahController::class, 'download'])->name('download');
    });
});
