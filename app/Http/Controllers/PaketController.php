<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::with('destinasi')->get();
        return view('admin.data-paket-wisata', compact('paket'));
    }

    public function create()
    {
        $destinasi = Destinasi::all();
        return view('paket.create', compact('destinasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'destinasi_id' => 'required|exists:destinasi,id', // Changed to destinasi
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|numeric|min:0',
            'fasilitas' => 'required|string',
            'durasi' => 'required|string',
            'populer' => 'boolean',
        ]);

        $gambarPath = $request->file('gambar')->store('gambar', 'public');

        Paket::create([
            'nama_paket' => $request->nama_paket,
            'destinasi_id' => $request->destinasi_id,
            'gambar' => $gambarPath,
            'harga' => $request->harga,
            'fasilitas' => $request->fasilitas,
            'durasi' => $request->durasi,
            'populer' => $request->populer ?? 0,
        ]);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(Paket $paket)
    {
        $destinasi = Destinasi::all();
        return view('paket.edit', compact('paket', 'destinasi'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'destinasi_id' => 'required|exists:destinasi,id', // Changed to destinasi
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|numeric|min:0',
            'fasilitas' => 'required|string',
            'durasi' => 'required|string',
            'populer' => 'boolean',
        ]);

        $data = $request->only(['nama_paket', 'destinasi_id', 'harga', 'fasilitas', 'durasi', 'populer']);

        if ($request->hasFile('gambar')) {
            if ($paket->gambar) {
                Storage::disk('public')->delete($paket->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $paket->update($data);

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(Paket $paket)
    {
        if ($paket->gambar) {
            Storage::disk('public')->delete($paket->gambar);
        }
        $paket->delete();
        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}