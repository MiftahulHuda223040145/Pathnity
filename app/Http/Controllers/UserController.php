<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $user = User::findOrFail($userId);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:Male,Female',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update data user
        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'] ?? null;
        $user->birth_date = $validated['birth_date'] ?? $user->birth_date;
        $user->gender = $validated['gender'] ?? $user->gender;

        $city = $validated['city'] ?? '';
        $country = $validated['country'] ?? '';
        $user->address = trim("$city, $country", ', '); // Hapus koma jika salah satu kosong

        // Handle upload foto profil jika ada
        if ($request->hasFile('profilePicture')) {
            $profilePicturePath = $request->file('profilePicture')->store('profile_pictures', 'public');
            $user->avatar = $profilePicturePath;
        }

        // Simpan perubahan
        $user->save();

        // Redirect dengan pesan sukses
        return redirect('/setting')->with('success', 'Profile updated successfully!');
    }
}
