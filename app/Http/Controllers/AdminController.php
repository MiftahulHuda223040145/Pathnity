<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('dashboard.users.show', compact('user')); // Tampilkan halaman detail
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
}
