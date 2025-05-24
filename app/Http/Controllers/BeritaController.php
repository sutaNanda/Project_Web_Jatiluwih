<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita', compact('berita'),[
            'title' => 'Berita',
            'bg' => asset('img/bg-1.jpg'),
            'deskripsi' => 'Berita Seputar Pariwisata di Jatiluwih'
        ]);
    }
}
