<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)
{
    $tanggalMulai = $request->input('tanggal_mulai');
    $tanggalSelesai = $request->input('tanggal_selesai');

    // Query dasar
    $query = DB::table('reservasi')
        ->join('paket', 'reservasi.paket_id', '=', 'paket.id');

    // Jika user isi filter tanggal
    if ($tanggalMulai && $tanggalSelesai) {
        $query->whereBetween('tanggal_kunjungan', [$tanggalMulai, $tanggalSelesai]);
    }

    // Jumlah Pemesanan per Paket
    $laporan_pemesanan = (clone $query)
        ->select('paket.nama_paket', DB::raw('COUNT(*) as total_pemesanan'))
        ->groupBy('paket.nama_paket')
        ->get();

    // Total Pendapatan per Paket
    $laporan_pendapatan = (clone $query)
        ->select('paket.nama_paket', DB::raw('SUM(reservasi.jumlah_orang * paket.harga) as total_pendapatan'))
        ->groupBy('paket.nama_paket')
        ->get();

    // Status Pembayaran tidak pakai filter tanggal karena ada di tabel berbeda
    $laporan_status = DB::table('pembayaran')
        ->select('status', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('status')
        ->pluck('jumlah', 'status');

    return view('admin.laporan', compact(
        'laporan_pemesanan',
        'laporan_pendapatan',
        'laporan_status',
        'tanggalMulai',
        'tanggalSelesai'
    ));
}

}