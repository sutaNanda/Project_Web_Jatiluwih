<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Midtrans\Snap;
use Midtrans\Config;

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
        $validated = $request->validate([
            'paket_id' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'jumlah_orang' => 'required|integer|min:1',
            'tanggal_kunjungan' => 'required|date',
            'catatan' => 'nullable',
        ]);

        $reservasi = Reservasi::create($validated);
        $paket = $reservasi->paket;
        $jumlah = $paket->harga * $reservasi->jumlah_orang;

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = 'ORDER-' . $reservasi->id . '-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $jumlah,
            ],
            'customer_details' => [
                'first_name' => $reservasi->nama,
                'email' => $reservasi->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        Pembayaran::create([
            'reservasi_id' => $reservasi->id,
            'metode_pembayaran' => 'midtrans',
            'status' => 'pending',
            'jumlah' => $jumlah,
            'midtrans_order_id' => $orderId,
        ]);

        return view('user.form-reservasi', [
            'paket' => $paket,
            'snapToken' => $snapToken,
            'reservasi' => $reservasi,
            'success' => 'Reservasi berhasil, lanjut ke pembayaran.'
        ]);
    }


    public function laporan()
    {
        $reservasis = Reservasi::all();
        return view('admin.data-booking', compact('reservasis'));
    }

    public function detail($id)
    {
        $booking = Reservasi::findOrFail($id);

        return view('admin.detail-booking', compact('booking'), [
            'title' => 'Detail Booking',
            'bg' => asset('img/bg-booking.jpg'),
        ]);
    }

    public function konfirmasi($id)
    {
        $booking = Reservasi::findOrFail($id);
        $booking->status = 'Dikonfirmasi';
        $booking->save();

        return redirect()->back()->with('success', 'Booking berhasil dikonfirmasi.');
    }

    public function tolak($id)
    {
        $booking = Reservasi::findOrFail($id);
        $booking->status = 'Ditolak';
        $booking->save();

        return redirect()->back()->with('error', 'Booking telah ditolak.');
    }

}
