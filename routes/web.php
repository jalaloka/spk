<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarTenagaHonorController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\SubkriteriaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::middleware('auth')->group(function () {

    // Pengguna controller
    Route::controller(DaftarTenagaHonorController::class)->group(function () {
        Route::get('/pengguna',  'index');
        Route::get('/daftar-tenaga-honor',  'index');
        Route::get('/daftar-tenaga-honor/create',  'create');
        Route::post('daftar-tenaga-honor',  'store');
        Route::get('/daftar-tenaga-honor/{pegawai}',  'show');
        Route::delete('/daftar-tenaga-honor/{pegawai}',  'destroy');
    });

    // Kriteria controller
    Route::controller(KriteriaController::class)->group(function () {
        Route::get('/kriteria', 'index');
        Route::get('/kriteria/create', 'create');
        Route::post('/kriteria', 'store');
        Route::get('/kriteria/{kriteria}', 'show');
    });

    // Subkriteria controller
    Route::controller(SubkriteriaController::class)->group(function () {
        Route::get('/subkriteria', 'index');
        Route::get('/subkriteria/create', 'create');
        Route::post('/subkriteria', 'store');
        Route::get('/subkriteria/{subkriteria}', 'show');
    });

    // Hasil seleksi controller
    Route::controller(SeleksiController::class)->group(function () {
        Route::get('/seleksi', 'index');
        Route::post('seleksi', 'store');
        Route::get('/hasil_seleksi', 'index2');
        Route::get('/hitungHasil/{pegawai}', 'hitungHasil');
        Route::get('/hitungHasil/{pegawai}', 'hitungHasil');
        Route::get('/seleksi/detail/{pegawai}', 'detail');
    });


    Route::get('/komponen', [KomponenController::class, 'index']);
    Route::post('/komponen', [KomponenController::class, 'store']);
});
