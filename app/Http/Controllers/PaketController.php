<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
{
    public function user()
{
    $paket = Paket::all();
    return view('user.reservasi', compact('paket'), [
        'title' => 'Reservasi',
        'bg' => asset('img/img-13.jpg'),
        'deskripsi' => 'Pilih paket wisata menarik sesuai keinginan Anda'
    ]);
}

public function index()
    {
        $paket = Paket::with('destinasi')->get();
        return view('admin.data-paket-wisata', compact('paket'));
    }

    // Menampilkan form tambah paket
    public function create()
    {
        $destinasi = Destinasi::all();
        return view('admin.crud-paket.create', compact('destinasi'));
    }

    // Menyimpan data paket baru
    public function store(Request $request)
{
    $request->validate([
        'nama_paket' => 'required|string|max:255',
        'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'harga' => 'required|integer',
        'fasilitas' => 'required|string',
        'durasi' => 'required|string',
        'destinasi_id' => 'required|exists:destinasi,id',
    ]);

    // Simpan gambar ke folder public/gambar dengan format: timestamp_namaasli
    $file = $request->file('gambar');
    $namaGambar = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('gambar'), $namaGambar);

    Paket::create([
        'nama_paket' => $request->nama_paket,
        'gambar' => $namaGambar, // Hanya nama file, tanpa folder
        'harga' => $request->harga,
        'fasilitas' => $request->fasilitas,
        'durasi' => $request->durasi,
        'populer' => $request->has('populer'),
        'destinasi_id' => $request->destinasi_id,
    ]);

    return redirect()->route('data-paket-wisata.index')->with('success', 'Paket berhasil ditambahkan');
}


    // Menampilkan form edit
    public function edit(Paket $paket)
    {
        $destinasi = Destinasi::all();
        return view('admin.crud-paket.edit', compact('paket', 'destinasi'));
    }

    // Memperbarui data paket
    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|integer',
            'fasilitas' => 'required|string',
            'durasi' => 'required|string',
            'destinasi_id' => 'required|exists:destinasi,id',
        ]);

        $paket = Paket::findOrFail($paket->id);

        // Perbarui gambar jika ada
        if ($request->hasFile('gambar')) {

            if ($paket->gambar && file_exists(public_path('gambar/'.$paket->gambar))) {
            File::delete(public_path('gambar/'.$destinasi->gambar));
            }

            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('gambar'), $filename);
            $paket->gambar = $filename;
        }

        $paket->update([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
            'durasi' => $request->durasi,
            'populer' => $request->has('populer'),
            'destinasi_id' => $request->destinasi_id,
        ]);

        return redirect()->route('data-paket-wisata.index')->with('success', 'Paket berhasil diperbarui');
    }

    // Menghapus data paket
    public function destroy(Paket $paket)
    {
        $paket->delete();
        return redirect()->route('data-paket-wisata.index')->with('success', 'Paket berhasil dihapus');
    }

}