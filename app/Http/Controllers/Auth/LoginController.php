<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Tetap pakai view yang sama
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek admin berdasarkan email atau username
        $admin = Admin::where('email', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Simpan ke session manual (tanpa guard)
            session(['is_logged_in' => true, 'admin_id' => $admin->id, 'admin_name' => $admin->nama]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau Password salah!',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['is_logged_in', 'admin_id', 'admin_name']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
