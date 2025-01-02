<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Services\LocationService;

class UserController extends Controller
{
    protected $locationService;
    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }
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
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'password' => 'required|min:8|max:255|confirmed'
        ]);

        // Ambil nama provinsi, kota, kecamatan dari request
        $provinceName = $validated['province'];
        $regencyName = $validated['regency'];
        $districtName = $validated['district'];

        // Gabungkan provinsi, kota, dan kecamatan menjadi satu alamat
        $fullAddress = "$districtName, $regencyName, $provinceName";
        $user->address = $fullAddress;

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
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update data user
        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'] ?? null;
        $user->birth_date = $validated['birth_date'] ?? $user->birth_date;
        $user->gender = $validated['gender'] ?? $user->gender;

        $provinceName = $validated['province'];
        $regencyName = $validated['regency'];
        $districtName = $validated['district'];
        $fullAddress = "$districtName, $regencyName, $provinceName";
        $user->address = $fullAddress;

        if ($request->hasFile('profilePicture')) {
            $profilePicture = $request->file('profilePicture');
            $fileName = 'profile_' . Auth::id() . '.' . $profilePicture->getClientOriginalExtension();

            // Pindahkan gambar ke folder public/img/profile
            $profilePicture->move(public_path('img/profile'), $fileName);

            $user->avatar = 'img/profile/' . $fileName;
        }



        // Simpan perubahan
        $user->save();

        // Redirect dengan pesan sukses
        return redirect('/setting')->with('success', 'Profile updated successfully!');
    }

    public function showProfile()
    {
        $user = Auth::user();
        $userId = $user->id;

        $user = User::findOrFail($userId);

        // Ambil ID provinsi, kota, dan kecamatan dari alamat yang disimpan
        $addressParts = explode(',', $user->address);
        $districtId = $addressParts[0] ?? '';
        $regencyId = $addressParts[1] ?? '';
        $provinceId = $addressParts[2] ?? '';

        // Ambil nama lokasi berdasarkan ID
        $districtName = $this->locationService->getLocationById('districts', $districtId);
        $regencyName = $this->locationService->getLocationById('regencies', $regencyId);
        $provinceName = $this->locationService->getLocationById('provinces', $provinceId);

        return view('setting', compact('districtName', 'regencyName', 'provinceName'));
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $user = User::findOrFail($userId);
        $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed|different:current_password',
        ], [
            'new_password.different' => 'The new password must be different from the current password.',
            'new_password.confirmed' => 'The new password confirmation does not match.',
        ]);

        // Memeriksa apakah current password cocok dengan yang ada di database
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password user
        $user->password = Hash::make($validated['new_password']);
        $user->save();

        // Redirect dengan pesan sukses
        return redirect('/setting')->with('success', 'Password changed successfully!');
    }
}
