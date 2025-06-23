<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Midtrans\Snap;
use Midtrans\Config;

class PembayaranController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function bayar($reservasi_id)
    {
        $reservasi = Reservasi::with('paket')->findOrFail($reservasi_id);

        $orderId = 'ORDER-' . $reservasi->id . '-' . time();
        $jumlah = $reservasi->paket->harga * $reservasi->jumlah_orang;

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

        // Simpan ke tabel pembayaran
        Pembayaran::create([
            'reservasi_id' => $reservasi->id,
            'metode_pembayaran' => 'midtrans',
            'status' => 'pending',
            'jumlah' => $jumlah,
            'midtrans_order_id' => $orderId,
        ]);

        return view('bayar', compact('snapToken', 'reservasi'));
    }

    public function handleCallback(Request $request)
    {
        $notif = new \Midtrans\Notification();

        $transaction = $notif->transaction_status;
        $orderId = $notif->order_id;
        $transactionId = $notif->transaction_id;

        $pembayaran = Pembayaran::where('midtrans_order_id', $orderId)->first();

        if ($pembayaran) {
            $pembayaran->update([
                'status' => $transaction,
                'midtrans_transaction_id' => $transactionId
            ]);
        }

        return response()->json(['message' => 'Notifikasi diproses']);
    }

}
