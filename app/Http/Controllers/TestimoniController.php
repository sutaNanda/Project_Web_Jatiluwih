<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Paket; 


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
            'rating' => 'required|numeric|min:1|max:5',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

    // dd($request->all());

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar'), $namaGambar);
        }

        // Simpan testimoni baru
        Testimoni::create([
            'email' => $request->email,
            'pesan' => $request->pesan,
            'paket_id' => $request->paket_id,
            'tanggal' => now()->toDateString(),
            'gambar' => $namaGambar,
            'rating' => $request->rating,
        ]);

        // Hitung rata-rata rating testimoni untuk paket terkait
        $averageRating = Testimoni::where('paket_id', $request->paket_id)->avg('rating');

        // Update status populer di tabel paket
        $paket = Paket::find($request->paket_id);
        $paket->refresh(); 
        $paket->populer = ($averageRating >= 4) ? 1 : 0;
        $paket->save();

        return back()->with('testimoni_success', 'Testimoni berhasil dikirim!');
    }

}
