<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function form($paket_id)
    {
        $paket = Paket::findOrFail($paket_id);
        return view('user.form-reservasi', compact('paket'),[
            'title' => 'Reservasi',
            'bg' => asset('img/img-13.jpg'),
            'deskripsi' => 'berbagi paket wisata menarik yang bisa dinikmati'
        ]);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required',
            'paket_id' => 'required|exists:paket,id',
            'jumlah_orang' => 'required|integer|min:1',
            'tanggal_kunjungan' => 'required|date',
            'catatan' => 'nullable|string'
        ]);

        Reservasi::create($request->all());

        return redirect()->route('form-reservasi', ['paket_id' => $request->paket_id]) ->with('success', 'Reservasi berhasil dikirim!');
    }
}
