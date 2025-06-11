<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Paket;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::where('status', 'aktif')->take(3)->get();
        $paket = Paket::where('populer', '1')->take(3)->get();
        $testimonis = Testimoni::with('paket')->latest()->get();
        return view('user.home', [
        'destinasi' => $destinasi,
        'paket' => $paket,
        'title' => 'Home',
        'bg' => asset('img/bg-1.jpg'),
        'testimonis' => $testimonis
    ]);
    }
}

