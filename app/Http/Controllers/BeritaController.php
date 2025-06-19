<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{

    // Untuk halaman berita bagian pengunjung
    public function user()
    {
        $berita = Berita::all();
        return view('user.berita', compact('berita'),[
            'title' => 'Berita',
            'bg' => asset('img/bg-1.jpg'),
            'deskripsi' => 'Berita Seputar Pariwisata di Jatiluwih'
        ]);
    }

        // Menampilkan halaman detail berita
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        // Ambil 5 berita terbaru selain yang sedang dibuka
        $berita_terbaru = Berita::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('user.detail-berita', [
            'berita' => $berita,
            'berita_terbaru' => $berita_terbaru,
            'title' => $berita->judul,
            'bg' => asset('img/bg-1.jpg'),
            'deskripsi' => 'Baca berita lengkap di bawah ini.'
        ]);
    }


    // Untuk halaman data berita bagian admin
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.data-berita', compact('beritas'));
    }

    public function create()
    {
        $destinasi = \App\Models\Destinasi::all(); // pastikan model Destinasi sudah ada
        return view('admin.crud-berita.create', compact('destinasi'));
    }

   public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required|string',
        'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Bukan 'gambar', tapi 'image'
        'destinasi_id' => 'nullable|exists:destinasi,id',
    ]);

    // Ambil file gambar dari request
    $file = $request->file('gambar');

    // Buat nama file unik
    $filename = time() . '_' . $file->getClientOriginalName();

    // Simpan ke folder public/gambar
    $file->move(public_path('gambar'), $filename);

    // Simpan ke database
    Berita::create([
        'judul' => $request->judul,
        'konten' => $request->konten,
        'gambar' => 'gambar/' . $filename,
        'destinasi_id' => $request->destinasi_id,
    ]);

    return redirect()->route('data-berita.index')->with('success', 'Berita berhasil ditambahkan!');
}

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.crud-berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update gambar jika ada file baru
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('gambar'), $filename);
            $berita->gambar = 'gambar/' . $filename;
        }

        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->save();

        return redirect()->route('data-berita.index')->with('success', 'Berita berhasil diperbarui!');
    }


    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('data-berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
