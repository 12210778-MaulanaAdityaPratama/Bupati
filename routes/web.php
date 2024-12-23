<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanCamatController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/geografi', function () {
    return view('geografi.geografi');
})->name('geografi');

Route::get('/ekonomi', function () {
    return view('ekonomi.ekonomi');
})->name('ekonomi');

Route::get('/wilayah', function () {
    return view('wilayah.wilayah');
})->name('wilayah');

Route::get('/laporan-camat/download/{kecamatan}/{bulan}/{tahun}', [LaporanCamatController::class, 'download'])->name('laporan-camat.download');
Route::get('/laporan-camat/view/{kecamatan}/{bulan}/{tahun}', [LaporanCamatController::class, 'view'])->name('laporan-camat.view');