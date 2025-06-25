<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Log;
use Midtrans\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservasiBerhasilMail;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

class ReservasiController extends Controller
{
    public function form($paket_id)
    {
        $paket = Paket::findOrFail($paket_id);
        return view('user.form-reservasi', compact('paket'), [
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

    public function showReservation($id)
    {
        $reservasi = Reservasi::with('paket', 'pembayaran')->findOrFail($id);

        if ($reservasi->status !== 'Dikonfirmasi') {
            abort(403, 'Reservation not accessible.');
        }

        return view('user.reservation-details', compact('reservasi'), [
            'title' => 'Reservation Details',
            'bg' => asset('img/img-13.jpg'),
        ]);
    }

    public function webhook(Request $request)
    {
        Log::info('[WEBHOOK] Endpoint hit at ' . now(), ['payload' => $request->all()]);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');

        try {
            Log::info('[WEBHOOK] Raw Headers', $request->headers->all());
            Log::info('[WEBHOOK] Raw Body', $request->all());

            $notif = new Notification();
            $data = $notif->getResponse();

            Log::info('[WEBHOOK] Parsed Notification', [
                'order_id' => $data->order_id ?? null,
                'transaction_status' => $data->transaction_status ?? null,
                'fraud_status' => $data->fraud_status ?? null
            ]);

            $orderId = $data->order_id ?? null;
            if (empty($orderId)) {
                Log::error('[WEBHOOK] order_id kosong', ['notif_data' => (array) $data]);
                return response()->json(['message' => 'order_id tidak ditemukan'], 400);
            }

            $pembayaran = Pembayaran::where('midtrans_order_id', $orderId)->first();
            if (!$pembayaran) {
                Log::error('[WEBHOOK] Pembayaran tidak ditemukan', ['order_id' => $orderId]);
                return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
            }

            $reservasi = $pembayaran->reservasi ?: Reservasi::find($pembayaran->reservasi_id);
            if (!$reservasi) {
                Log::error('[WEBHOOK] Reservasi tidak ditemukan', ['reservasi_id' => $pembayaran->reservasi_id]);
                return response()->json(['message' => 'Reservasi tidak ditemukan'], 404);
            }

            $status = strtolower($data->transaction_status ?? '');

            switch ($status) {
                case 'capture':
                case 'settlement':
                    $pembayaran->status = 'success';
                    $pembayaran->save();

                    $reservasi->status = 'Dikonfirmasi';
                    $reservasi->save();

                    Log::info('[WEBHOOK] Status updated to success and Dikonfirmasi', [
                        'reservasi_id' => $reservasi->id
                    ]);

                    try {
                        $qrContent = url('reservation/' . $reservasi->id);

                        $result = Builder::create()
                            ->writer(new PngWriter())
                            ->data($qrContent)
                            ->size(300)
                            ->margin(10)
                            ->build();

                        $qrCode = $result->getString(); // PNG binary

                        Mail::to($reservasi->email)->send(new ReservasiBerhasilMail($reservasi, $qrCode));
                        Log::info('[WEBHOOK] Email berhasil dikirim ke ' . $reservasi->email);
                    } catch (\Exception $e) {
                        Log::error('[WEBHOOK] Gagal kirim email/QR: ' . $e->getMessage());
                    }
                    break;

                case 'pending':
                    $pembayaran->status = 'pending';
                    $pembayaran->save();
                    Log::info('[WEBHOOK] Status set to pending');
                    break;

                case 'deny':
                case 'cancel':
                case 'expire':
                    $pembayaran->status = 'failed';
                    $pembayaran->save();

                    $reservasi->status = 'Gagal';
                    $reservasi->save();
                    Log::info('[WEBHOOK] Status set to failed & Gagal');
                    break;

                default:
                    Log::warning('[WEBHOOK] Unknown status: ' . $status);
                    break;
            }

            return response()->json(['message' => 'Notifikasi diproses'], 200);
        } catch (\Exception $e) {
            Log::error('[WEBHOOK] Fatal Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['message' => 'Terjadi kesalahan saat memproses webhook'], 500);
        }
    }
}
