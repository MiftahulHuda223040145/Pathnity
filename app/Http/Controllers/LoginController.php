<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek apakah email ada di tabel users atau organizers
        $user = User::where('email', $credentials['email'])->first();
        $organizer = Organizer::where('email', $credentials['email'])->first();

        // Jika tidak ditemukan di kedua tabel
        if (!$user && !$organizer) {
            return back()->withErrors(['email' => 'Email not registered.']);
        }

        // Tentukan apakah login sebagai user atau organizer
        if ($user && Auth::guard('web')->attempt($credentials)) {
            $role = $user->role;
        } elseif ($organizer && Auth::guard('organizer')->attempt($credentials)) {
            $role = $organizer->role;
        } else {
            return back()->withErrors(['password' => 'Incorrect credentials.']);
        }

        // Setelah berhasil login, arahkan berdasarkan role
        if ($role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($role === 'user') {
            return redirect()->intended('/user/dashboard');
        } elseif ($role === 'organizer') {
            return redirect()->intended('/organizer/dashboard');
        }

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
