<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::with('paket')->get(); // relasi dengan tabel paket
        return view('testimoni.index', compact('testimonis'));
    }

    
    public function simpan(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pesan' => 'required|string',
            'paket_id' => 'required|exists:paket,id',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('gambar');
        $namaGambar = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('gambar'), $namaGambar);

        Testimoni::create([
            'email' => $request->email,
            'pesan' => $request->pesan,
            'paket_id' => $request->paket_id,
            'tanggal' => now()->toDateString(),
            'gambar' => $namaGambar, // Hanya nama file, tanpa folder
        ]);

        return back()->with('testimoni_success', 'Testimoni berhasil dikirim!');
    }
}
