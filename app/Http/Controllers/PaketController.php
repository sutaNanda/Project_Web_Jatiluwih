<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
     public function index()
    {
        $paket = Paket::all();
        return view('reservasi', compact('paket'),[
            'title' => 'Reservasi',
            'bg' => asset('img/img-13.jpg'),
            'deskripsi' => 'berbagi paket wisata menarik yang bisa dinikmati'
            
        ]);
    }
}
