<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organizer;
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
    public function storeOrganizer(Request $request)
    {
        $validatedData = $request->validate([
            'organization_name' => 'required|max:255',
            'username' => 'nullable|string||max:255',
            'phone_number' => 'required|digits_between:10,15',
            'position' => 'required|in:manager,hrd,admin',
            'website' => 'required|',
            'tax_id' => 'nullable|string',
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'address_details' => 'required|string',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255|confirmed'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $provinceName = $validatedData['province'];
        $regencyName = $validatedData['regency'];
        $districtName = $validatedData['district'];
        $addressDetails = $validatedData['address_details'];
        $fullAddress = "$addressDetails,$districtName, $regencyName, $provinceName";
        $validatedData['address'] = $fullAddress;
        Organizer::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
