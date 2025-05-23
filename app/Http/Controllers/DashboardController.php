<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Cek session login
        if (!$request->session()->get('is_logged_in')) {
            return redirect()->route('login');
        }

        // Data dashboard
        $data = [
            'total_wisata' => 4,
            'total_booking' => 34,
            'booking_belum_dikonfirmasi' => 8,
        ];

        return view('admin.dashboard', compact('data'));
    }
}
