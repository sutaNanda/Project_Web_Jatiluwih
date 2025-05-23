<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Blade login form
    }

    public function login(Request $request)
    {
        // Validasi form
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Hardcoded username & password
        $validUsername = 'admin';
        $validPassword = 'password123';

        // Cek login manual
        if ($request->username === $validUsername && $request->password === $validPassword) {
            // Simpan status login ke session
            session(['is_logged_in' => true]);

            // Redirect ke dashboard setelah login
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Username atau Password salah!',
        ])->withInput();
    }


    public function logout(Request $request)
    {
        $request->session()->forget('is_logged_in');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
