<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarTenagaHonorController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\SubkriteriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/pengguna', [PenggunaController::class, 'index']);
    Route::get('/daftar-tenaga-honor', [DaftarTenagaHonorController::class, 'index']);
    Route::get('/daftar-tenaga-honor/create', [DaftarTenagaHonorController::class, 'create']);
    Route::post('daftar-tenaga-honor', [DaftarTenagaHonorController::class, 'store'])->name('daftar-tenaga-honor');
    Route::get('/daftar-tenaga-honor/{pegawai}', [DaftarTenagaHonorController::class, 'show']);

    Route::get('/kriteria', [KriteriaController::class, 'index']);
    Route::get('/kriteria/create', [KriteriaController::class, 'create']);
    Route::post('/kriteria', [KriteriaController::class, 'store']);
    Route::get('/kriteria/{kriteria}', [KriteriaController::class, 'show']);

    Route::get('/subkriteria', [SubkriteriaController::class, 'index']);
    Route::get('/subkriteria/create', [SubkriteriaController::class, 'create']);
    Route::post('/subkriteria', [SubkriteriaController::class, 'store']);
    Route::get('/subkriteria/{subkriteria}', [SubkriteriaController::class, 'show']);

    Route::get('/komponen', [KomponenController::class, 'index']);
    Route::post('/komponen', [KomponenController::class, 'store']);

    Route::get('/seleksi', [SeleksiController::class, 'index']);
    Route::post('seleksi', [SeleksiController::class, 'store'])->name('seleksi');
    Route::get('/hasil_seleksi', [SeleksiController::class, 'index2'])->name('hasil_seleksi');

});

