<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function galeriWisata()
    {
        return view('admin.galeri-wisata');
    }

    public function dataBooking()
    {
        return view('admin.data-booking');
    }

    public function laporan()
    {
        return view('admin.laporan');
    }

    public function profilDesa()
    {
        return view('admin.profil-desa');
    }

    public function kelolaAdmin()
    {
        return view('admin.kelola-admin');
    }
}
