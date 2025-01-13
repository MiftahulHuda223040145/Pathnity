<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organizer;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data user dari tabel users
        $users = User::all();

        return view('dashboard.users.users', compact('users'));
    }


    public function show($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('dashboard.users.detail-user', compact('user')); // Tampilkan halaman detail
    }
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('dashboard.users.edit', compact('user')); // Tampilkan halaman edit
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->delete(); // Hapus user
        return redirect()->route('dashboard.users.users')->with('success', 'User deleted successfully!');
    }
    public function search(Request $request)
    {
        $query = $request->get('query');

        // Jika query kosong, ambil semua data
        if ($query) {
            $users = User::where('first_name', 'like', "%{$query}%")
                ->orWhere('last_name', 'like', "%{$query}%")
                ->get();
        } else {
            $users = User::all(); // Ambil semua data pengguna jika query kosong
        }

        // Mengembalikan data dalam bentuk JSON
        return response()->json([
            'users' => $users
        ]);
    }

    public function indexOrg()
    {
        // Ambil semua data organizer dari tabel organizers
        $organizers = Organizer::all();

        // Kirim data organizer ke view
        return view('dashboard.organizer.organizer', compact('organizers'));
    }
    public function showOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Tampilkan halaman detail dengan data organizer
        return view('dashboard.organizer.show', compact('organizer'));
    }
    public function editOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Tampilkan halaman edit dengan data organizer
        return view('dashboard.organizer.edit', compact('organizer'));
    }
    public function destroyOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Hapus data organizer
        $organizer->delete();

        // Redirect kembali ke halaman organizer dengan pesan sukses
        return redirect()->route('dashboard.organizer.organizer')->with('success', 'Organizer deleted successfully!');
    }

    public function searchOrganizer(Request $request)
    {
        $query = $request->get('query');

        // If there is a search query, filter the organizers
        if ($query) {
            $organizers = Organizer::where('organization_name', 'like', "%{$query}%")
                ->orWhere('username', 'like', "%{$query}%")
                ->orWhere('email', 'like', "%{$query}%")
                ->get();
        } else {
            // If no query, return all organizers
            $organizers = Organizer::all();
        }

        // Return the response in JSON format
        return response()->json([
            'organizers' => $organizers
        ]);
    }

    public function showVacancies()
    {
        // Mengambil semua data vacancies yang statusnya aktif
        $vacancies = Vacancies::with(['category', 'type', 'organizer'])
            ->get();

        return view('dashboard.vacancies.vacancies', compact('vacancies'));
    }
    public function destroyVacancies($id)
    {
        $vacancy = Vacancies::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('dashboard.vacancies')->with('success', 'Vacancy deleted successfully!');
    }
}
