<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/coba', function () {
    return view('coba');
});
