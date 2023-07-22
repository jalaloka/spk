<?php

use App\Http\Controllers\DaftarTenagaHonorController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenggunaController;
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
    return view('layout.app');
});

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/daftar-tenaga-honor', [DaftarTenagaHonorController::class, 'index']);
Route::get('/daftar-tenaga-honor/create', [DaftarTenagaHonorController::class, 'create']);
Route::post('/daftar-tenaga-honor', [DaftarTenagaHonorController::class, 'store']);
Route::get('/daftar-tenaga-honor/{pegawai}', [DaftarTenagaHonorController::class, 'show']);

Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::get('/kriteria/create', [KriteriaController::class, 'create']);
Route::post('/kriteria', [KriteriaController::class, 'store']);
Route::get('/kriteria/{kriteria}', [KriteriaController::class, 'show']);
