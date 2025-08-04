<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SiswaController;

// 📌 Rute pendaftaran ekskul tanpa login
Route::get('/daftar', [PendaftarController::class, 'create']);
Route::post('/daftar', [PendaftarController::class, 'store']);
Route::get('/pendaftar', [PendaftarController::class, 'index']);

// routes/web.php
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// 📌 Rute untuk siswa daftar ekskul
Route::post('/students/{id}/enroll', [StudentController::class, 'enroll'])->name('students.enroll');

// 📌 Route detail siswa
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// ✅ Rute default Laravel
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 📌 Rute yang butuh login
Route::middleware('auth')->group(function () {
    Route::resource('/student', StudentController::class);
    Route::resource('siswas', SiswaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Autentikasi Laravel Breeze/Fortify
require __DIR__.'/auth.php';
