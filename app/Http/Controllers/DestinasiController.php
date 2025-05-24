<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinasiController extends Controller
{
    public function index()
    {
        $data = Destinasi::all();
        $destinasi = Destinasi::where('status', 'aktif')->get();
        return view('destinasi', compact('destinasi'),[
            'title' => 'Destinasi',
            'bg' => asset('img/gallery-10.jpg'),
            'deskripsi' => 'berbagi paket wisata menarik yang bisa dinikmati'
            
        ]);
    }
    public function index2()
    {
        $destinasi = Destinasi::where('status', 'aktif')->get();
        return view('admin.data-wisata', compact('destinasi'));
    }

    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('detail-destinasi', compact('destinasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_destinasi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        // Simpan gambar ke folder public/gambar
        $file = $request->file('gambar');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('gambar'), $filename);

        // Simpan data ke DB
        Destinasi::create([
            'nama_destinasi' => $request->nama_destinasi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

}
