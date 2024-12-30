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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Periksa apakah email ada di tabel User atau Organizer
        $user = User::where('email', $credentials['email'])->first();
        $organizer = Organizer::where('email', $credentials['email'])->first();

        if ($user && Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } elseif ($organizer && Auth::guard('organizer')->attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Auth::guard('web')->check(), Auth::guard('organizer')->check(), Auth::user());
            return redirect()->intended('/');
        }


        return back()->withErrors(['loginError' => 'Login failed!']);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
