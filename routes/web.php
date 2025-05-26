<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;



Route::get('/home', [HomeController::class, 'index']);

Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi.index');

Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');

Route::post('/destinasi', [DestinasiController::class, 'store'])->name('destinasi.store');

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/reservasi', [PaketController::class, 'index']);



//kontak
Route::get('/kontak', [ContactController::class, 'showForm'])->name('kontak.form');
Route::post('/kontak', [ContactController::class, 'sendMessage'])->name('kontak.send');
// routes wira


// admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::prefix('admin')->group(function () {
    // Route::get('dashboard2', function () { return view('admin.dashboard2'); });
    Route::get('data-wisata', [DestinasiController::class, 'index2']);
    // Route::get('data-wisata', function () { return view('admin.data-wisata'); });
    Route::get('galeri-wisata', function () { return view('admin.galeri-wisata'); });
    Route::get('data-booking', function () { return view('admin.data-booking'); });
    Route::get('laporan', function () { return view('admin.laporan'); });
    // Route::get('profil-desa', function () { return view('admin.profil-desa'); });
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


// routes global
// Route::get('/reservasi', function () {
//     return view('reservasi',[
//         'title' => 'Reservasi',
//         'bg' => asset('img/img-13.jpg'),
//         'deskripsi' => 'berbagi paket wisata menarik yang bisa dinikmati'
//     ]);
// });

Route::get('/form', function () {
    return view('form-reservasi',[
        'title' => 'form reservasi',
        'bg' => asset('img/bg-1.jpg'),
    ]);
});

Route::get('/create', function () {
    return view('admin.crud-destinasi.create');
});

Route::get('/detail-destinasi', function () {
    return view('detail-destinasi');
});

Route::get('/profil', function () {
    return view('profil',[
        'title' => 'Profil',
        'bg' => asset('img/img-13.jpg'),
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
