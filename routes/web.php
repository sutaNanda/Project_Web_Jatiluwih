<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservasiController;



Route::get('/home', [HomeController::class, 'index']);

Route::get('/destinasi', [DestinasiController::class, 'user'])->name('destinasi.user');
Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');

Route::get('/berita', [BeritaController::class, 'user'])->name('berita.user');

Route::get('/paket', [PaketController::class, 'user'])->name('paket.user');

Route::get('/reservasi/{id}', [ReservasiController::class, 'form'])->name('form-reservasi');

Route::post('/reservasi/simpan', [ReservasiController::class, 'simpan'])->name('reservasi.simpan');

//kontak
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'sendMessage'])->name('kontak.send');
// routes wira


// admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('admin')->group(function () {

    Route::get('data-booking', function () { return view('admin.data-booking');});
    Route::get('laporan', function () { return view('admin.laporan'); });
    Route::get('kelola-admin', function () { return view('admin.kelola-admin'); });
    Route::resource('kelola-admin', AdminController::class);
    Route::resource('data-berita', BeritaController::class)->names('data-berita');
   
    Route::resource('data-wisata', DestinasiController::class)->names('data-wisata');

    Route::resource('data-paket-wisata', PaketController::class)
    ->names('data-paket-wisata')
    ->parameters(['data-paket-wisata' => 'paket']);

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


Route::get('/detail-reservasi', function () {
    return view('form-reservasi');
});

Route::get('/profil', function () {
    return view('profil',[
        'title' => 'Profil',
        'bg' => asset('img/profil2.jpg'),
        'deskripsi' => 'tentang desa wisata jatiluwih'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        'title' => 'Kontak',
        'bg' => asset('img/bg-1.jpg'),
        'deskripsi' => 'Tanya Tentang sesuatu? Hubungi Kami Segera!'
    ]);
});
