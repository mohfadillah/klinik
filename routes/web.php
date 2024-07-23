<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('/');
Route::post('aksiLogin', [App\Http\Controllers\LoginController::class, 'aksiLogin'])->name('aksiLogin');
Route::get('aksiLogout', [App\Http\Controllers\LoginController::class, 'aksiLogout'])->name('aksiLogout');
Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('periksa-pasien', [App\Http\Controllers\PeriksaController::class, 'index']);
Route::post('forDaftar', [App\Http\Controllers\PeriksaController::class, 'forDaftar'])->name('forDaftar');

Route::get('konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index']);
Route::get('/konsultasi/{id}', [App\Http\Controllers\KonsultasiController::class, 'show'])->name('konsultasi.show');
Route::get('/konsultasi/detail/{id}', [App\Http\Controllers\KonsultasiController::class, 'detail'])->name('konsultasi.detail');

Route::middleware(['auth', 'Admin'])->group(function () {
Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('level', App\Http\Controllers\LevelController::class);
Route::resource('pegawai', App\Http\Controllers\PegawaiController::class);
Route::resource('obat', App\Http\Controllers\ObatController::class);
Route::resource('tindakan', App\Http\Controllers\TindakanController::class);
Route::resource('pasien', App\Http\Controllers\PasienController::class);
});