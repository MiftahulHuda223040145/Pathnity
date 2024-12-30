<?php

namespace App\Http\Controllers;


use App\Models\Organizer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrganizerController extends Controller
{
    public function updateOrganizer(Request $request)
    {
        $organizer = Auth::user();
        $organizerId = $organizer->id;

        $organizer = Organizer::findOrFail($organizerId);

        $validated = $request->validate([
            'organization_name' => 'required|max:255',
            'username' => 'nullable|string||max:255',
            'position' => 'required|in:Manajer,HRD,Admin',
            'website' => 'required|',
            'tax_id' => 'nullable|string',
            'province' => 'required|string',
            'regency' => 'required|string',
            'district' => 'required|string',
            'address_details' => 'required|string',
            'logo-Organizer' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update data user
        $organizer->organization_name = $validated['organization_name'];
        $organizer->username = $validated['username'] ?? $organizer->username;
        $organizer->position = $validated['position'] ?? $organizer->position;
        $organizer->website = $validated['website'] ?? $organizer->website;
        $organizer->tax_id = $validated['tax_id'] ?? $organizer->tax_id;

        // Update alamat
        $provinceName = $validated['province'];
        $regencyName = $validated['regency'];
        $districtName = $validated['district'];
        $addressDetails = $validated['address_details'];
        $fullAddress = "$addressDetails, $districtName, $regencyName, $provinceName";
        $organizer->address = $fullAddress;
        if ($request->hasFile('logo-organizer')) {
            $logoOrganizer = $request->file('logo-organizer');
            $fileName = 'profile_' . Auth::id() . '.' . $logoOrganizer->getClientOriginalExtension();

            // Pindahkan gambar ke folder public/img/profile
            $logoOrganizer->move(public_path('img/profile'), $fileName);

            $organizer->avatar = 'img/profile/' . $fileName;
        }



        // Simpan perubahan
        $organizer->save();

        // Redirect dengan pesan sukses
        return redirect('/settingOrg')->with('success', 'Organizatoin updated successfully!');
    }
    public function changePassword(Request $request)
    {
        $organizer = Auth::user();
        $organizerId = $organizer->id;

        $organizer = organizer::findOrFail($organizerId);
        $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed|different:current_password',
        ], [
            'new_password.different' => 'The new password must be different from the current password.',
            'new_password.confirmed' => 'The new password confirmation does not match.',
        ]);

        // Memeriksa apakah current password cocok dengan yang ada di database
        if (!Hash::check($validated['current_password'], $organizer->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password organizer
        $organizer->password = Hash::make($validated['new_password']);
        $organizer->save();

        // Redirect dengan pesan sukses
        return redirect('/settingOrg')->with('success', 'Password changed successfully!');
    }

    public function generatePdfReport()
    {
        $organizers = Organizer::all();
        $pdf = Pdf::loadView('dashboard.organizer.pdf', compact('organizers'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('Organizer_Report.pdf');
    }
}
