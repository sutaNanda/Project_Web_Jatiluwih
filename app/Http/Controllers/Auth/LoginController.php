<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // ini file blade login kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Kalau berhasil login
            return redirect()->route('admin.dashboard');
        }

        // Kalau gagal login
        return back()->withErrors([
            'loginError' => 'Username atau Password salah!',
        ])->withInput();
    }
}
