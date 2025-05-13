<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Menampilkan halaman kontak
    public function showForm()
    {
        return view('kontak');
    }

    // Mengirim pesan kontak
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Logika pengiriman email atau penyimpanan pesan di database
        // Jika menggunakan email
        Mail::to('admin@domain.com')->send(new \App\Mail\ContactMessage($request));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
