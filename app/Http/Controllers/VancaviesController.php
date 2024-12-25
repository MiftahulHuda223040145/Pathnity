<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage; // Pastikan namespace ini ada
use App\Models\Vancavies;
use Illuminate\Http\Request;

class VancaviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vancavies = Vancavies::all();
        return view('vancavies.index', compact('vancavies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vancavies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Jika ada file gambar diunggah
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('vancavies', 'public');
        }

        // Simpan data ke database
        Vancavies::create($validated);

        return redirect()->route('vancavies.index')->with('success', 'Vancavies created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vancavies $vancavy)
    {
        return view('vancavies.show', compact('vancavy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vancavies $vancavy)
    {
        return view('vancavies.edit', compact('vancavy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vancavies $vancavy)
    {
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

        // Update data di database
        $vancavy->update($validated);

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

        // Hapus data dari database
        $vancavy->delete();

        return redirect()->route('vancavies.index')->with('success', 'Vancavies deleted successfully.');
    }
}
