<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

class HomeController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::where('status', 'aktif')->take(3)->get();

        return view('home', compact('destinasi'));
    }
}

