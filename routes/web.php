<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

// Route contoh basic
Route::get('/pcr', function () {
    return ('Selamat Datang di Website Kampus PCR!');
});

Route::get('/mahasiswa', function () {
    return ('Hallo Mahasiswa PCR');
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1}', function ($param1) {
    return 'Nim saya: ' . $param1;
});

// Route ke view About
Route::get('/about', function () {
    return view('halaman-about');
});

// Route ke MahasiswaController
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route ke MatakuliahController
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name(name: 'matakuliah');

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::resource('pelanggan', PelangganController::class);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



// HAHAHA
