<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Berita;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard2'); 
    } //  tidsk terpakai

    public function dataWisata()
    {
        return view('admin.data-wisata');
    }

    public function data_berita()
    {
        return view('admin.data-berita');
    }

    public function dataBooking()
    {
        return view('admin.data-booking');
    }

    public function laporan()
    {
        return view('admin.laporan');
    }

    public function dataPaketWisata()
    {
        return view('admin.data-paket-wisata');
    }

    public function kelolaAdmin()
    {
        return view('admin.kelola-admin');
    }

    //test create
    public function create() {
    return view('admin.crud-admins.tambah');
    }

    public function store(Request $request)
    {
        Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi!
        ]);

        return redirect()->route('kelola-admin.index')->with('success', 'Admin berhasil ditambahkan!');
    }

    public function edit($id) {
        $admin = Admin::findOrFail($id);
        return view('admin.crud-admins.edit', compact('admin'));
    }

    public function update(Request $request, $id) {
        $admin = Admin::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('kelola-admin.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id) {
        Admin::destroy($id);
        return redirect()->route('kelola-admin.index')->with('success', 'Admin berhasil dihapus!');
    }

    public function index()
    {
    $admins = Admin::all(); // Ambil semua data admin dari tabel
    return view('admin.kelola-admin', compact('admins')); // kirim ke view
    }
    
}
