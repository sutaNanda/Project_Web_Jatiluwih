<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use App\Models\Destinasi;
use App\Charts\ReservasiChart; // ← Tambahkan ini

class DashboardController extends Controller
{
    public function index(Request $request, ReservasiChart $reservasiChart)
    {
        // Cek session login
        if (!$request->session()->get('is_logged_in')) {
            return redirect()->route('login');
        }

        // Data dashboard
        $data = [
            'total_wisata' => Destinasi::count(),
            'total_booking' => Reservasi::count(),
        ];

        // Buat chart dari class ReservasiChart
        $chart = $reservasiChart->build();

        // Kirim chart dan data ke view
        return view('admin.dashboard', compact('data', 'chart'));
    }
}
