<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanCamatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/laporan-camat/download', [LaporanCamatController::class, 'download'])->name('laporan-camat.download');
Route::get('/laporan-camat/view/{id}/{kecamatan}', [LaporanCamatController::class, 'view'])->name('laporan-camat.view');
