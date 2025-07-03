<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinasiController extends Controller
{
    public function user()
    {
        $destinasi = Destinasi::where('status', 'aktif')->get();
        return view('user.destinasi', compact('destinasi'),[
            'title' => 'Destinasi',
            'bg' => asset('img/gallery-10.jpg'),
            'deskripsi' => 'berbagi destinasi menarik yang bisa dinikmati'
            
        ]);
    }
    public function index()
    {
        // $destinasi = Destinasi::where('status', 'aktif')->get();
        $destinasi = Destinasi::all();
        return view('admin.data-wisata', compact('destinasi'));
    }

    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $daftarDestinasi = Destinasi::where('status', 'aktif')->get();
        return view('user.detail-destinasi', compact('destinasi', 'daftarDestinasi'));
    }

    public function create()
    {
        return view('admin.crud-destinasi.create');
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

    public function edit($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('admin.crud-destinasi.edit', compact('destinasi'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_destinasi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $destinasi = Destinasi::findOrFail($id);

        // Update gambar jika ada file baru
        if ($request->hasFile('gambar')) {

            if ($destinasi->gambar && file_exists(public_path('gambar/'.$destinasi->gambar))) {
            File::delete(public_path('gambar/'.$destinasi->gambar));
            }

            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('gambar'), $filename);
            $destinasi->gambar = $filename;
        }

        $destinasi->nama_destinasi = $request->nama_destinasi;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->status = $request->status;
        $destinasi->save();

        return redirect()->route('data-wisata.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        if ($destinasi->gambar) {
            File::delete(public_path('gambar/'.$destinasi->gambar));
        }
        $destinasi->delete();
        return redirect()->route('data-wisata.index')->with('success', 'Data berhasil dihapus');
    }

}