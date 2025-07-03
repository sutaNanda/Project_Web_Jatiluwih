<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PesanController extends Controller
{

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        $details = [
            'title' => 'Pesan dari Form Website',
            'body' => $request->pesan,
            'nama' => $request->nama,
            'email' => $request->email,
        ];

        Mail::to('sutananda338@gmail.com')->send(new \App\Mail\PesanMasuk($details));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    //
}
