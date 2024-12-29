<?php

namespace App\Http\Controllers;

use App\Models\Vancavies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VancaviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data vancavies dari database
        $vancavies = Vancavies::all();

        // Mengembalikan view dengan data vancavies
        return view('vancavies.index', compact('vancavies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat vancavy baru
        return view('vancavies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Cek apakah ada file gambar yang diupload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('vancavies', 'public');
        }

        // Menyimpan data vancavy baru ke database
        Vancavies::create($validated);

        // Redirect ke halaman index vancavies dengan pesan sukses
        return redirect()->route('vancavies.index')->with('success', 'Vancavies created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vancavies $vancavy)
    {
        // Menampilkan halaman detail vancavy
        return view('vancavies.show', compact('vancavy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vancavies $vancavy)
    {
        // Menampilkan form untuk mengedit data vancavy
        return view('vancavies.edit', compact('vancavy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vancavies $vancavy)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Jika ada file gambar baru diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($vancavy->image) {
                Storage::disk('public')->delete($vancavy->image);
            }

            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('vancavies', 'public');
        }

        // Update data vancavy di database
        $vancavy->update($validated);

        // Redirect ke halaman index vancavies dengan pesan sukses
        return redirect()->route('vancavies.index')->with('success', 'Vancavies updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vancavies $vancavy)
    {
        // Hapus gambar jika ada
        if ($vancavy->image) {
            Storage::disk('public')->delete($vancavy->image);
        }

        // Hapus data vancavy dari database
        $vancavy->delete();

        // Redirect ke halaman index vancavies dengan pesan sukses
        return redirect()->route('vancavies.index')->with('success', 'Vancavies deleted successfully.');
    }
}
