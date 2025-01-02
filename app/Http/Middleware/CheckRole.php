<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;



class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login'); 
        }

        // Cek apakah pengguna memiliki peran yang sesuai (0=admin, 1=organizer, 2=user)
        if (!in_array(Auth::user()->role, $roles)) {
            return redirect('/home');  
        }

        return $next($request);
    }
}
