<?php

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
    return 'Ini adalah halaman utama Laravel';
});

Route::get('/about', function () {
    return 'Ini adalah halaman tentang kami';
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

// Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
// Route::get('/mahasiswa/edit/{mahasiswa}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class)->except(['show']);
Route::resource('dosen', App\Http\Controllers\DosenController::class)->except(['show']);
