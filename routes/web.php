<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);

Route::get('/destinasi', [DestinasiController::class, 'index']);

Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');

Route::post('/destinasi', [DestinasiController::class, 'store'])->name('destinasi.store');



//kontak
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'sendMessage'])->name('kontak.send');


// routes wira


// admin
use App\Http\Controllers\DashboardController;
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('admin')->group(function () {
    Route::get('dashboard2', function () { return view('admin.dashboard2'); });
    Route::get('data-wisata', [DestinasiController::class, 'index2']);
    // Route::get('data-wisata', function () { return view('admin.data-wisata'); });
    Route::get('galeri-wisata', function () { return view('admin.galeri-wisata'); });
    Route::get('data-booking', function () { return view('admin.data-booking'); });
    Route::get('laporan', function () { return view('admin.laporan'); });
    Route::get('profil-desa', function () { return view('admin.profil-desa'); });
    Route::get('kelola-admin', function () { return view('admin.kelola-admin'); });
});



// login
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
// end routes wira

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/create', function () {
    return view('admin.create');
});

Route::get('/detail-destinasi', function () {
    return view('detail-destinasi');
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

// Route::get('/destinasi', function () {
//     return view('destinasi');
// });