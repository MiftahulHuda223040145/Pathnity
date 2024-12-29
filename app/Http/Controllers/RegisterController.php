<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'nullable|string|max:255',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required|digits_between:10,15',
            'birth_date' => 'required|date|before:today',
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255|confirmed'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $provinceName = $validatedData['province'];
        $regencyName = $validatedData['regency'];
        $districtName = $validatedData['district'];
        $fullAddress = "$districtName, $regencyName, $provinceName";
        $validatedData['address'] = $fullAddress;
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
