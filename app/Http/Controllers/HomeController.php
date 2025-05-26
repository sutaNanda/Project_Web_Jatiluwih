<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Paket;

class HomeController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::where('status', 'aktif')->take(3)->get();
        $paket = Paket::where('populer', '1')->take(3)->get();


        return view('home', [
        'destinasi' => $destinasi,
        'paket' => $paket,
        'title' => 'Home',
        'bg' => asset('img/bg-1.jpg'),
    ]);
    }
}

