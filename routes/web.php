<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// tampilkan keseluruhan data mahasiswa
Route::get('/', [MahasiswaController::class, 'index']);

// tampilkan form tambah data
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);

// masukkan data ke database
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

// tampilkan about
Route::get('/about', [MahasiswaController::class, 'about']);

// tampilkan form edit
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit']);

// edit data di database
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);

// hapus data mahasiswa
Route::delete('/hapus/{mahasiswa}', [MahasiswaController::class, 'hapus']);
