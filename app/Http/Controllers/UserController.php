<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showForm()
    {
        $socialUser = session('social_user');

        return view('register-complete', compact('socialUser'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id; 

        $user = User::findOrFail($userId);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'gender' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'birth_date' => 'required|date|before:today',
            'address' => 'required|string|max:255',
        ]);

        $user->update($validated);

        return redirect('/')->with('success', 'Profile updated successfully.');
    }
}
