<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

//kontak
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'sendMessage'])->name('kontak.send');


// Route login/logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dummy dashboard (sementara)
Route::get('/dashboard', function () {
    if (!session('is_logged_in')) {
        return redirect('/login');
    }
    return "Selamat datang di Dashboard!";
});

// Route tambahan dari remote
Route::get('/home', function () {
    return view('home');
});

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/berita', function () {
    return view('berita');
});