<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $vacancies = Vacancies::all();

       
        return view('dashboard.vacancies.vacancies', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = Category::all();
        return view('dashboard.vacancies.create-vancancy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' =>'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            
        ]);

        
        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('vacancies', 'public');
        }

        $validatedData['description'] = strip_tags($request->description);

        
        Vacancies::create($validatedData);

        
        return redirect('/dashboard/vacancies')->with('success', 'vacancies berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancies $vacancies)
    {
        $vacanciesById = Vacancies::where('id', $vacancies->id)->first();
        return view('dashboard.vacancies.detail-vacancy', [
            'vacancies' => $vacanciesById
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancies $vacancies)
    {
        $vacanciesById = Vacancies::where('id', $vacancies->id)->first();
        return view('dashboard.vacancies.edit', [
            'vacancies' => $vacanciesById,
            'categories' => Category::all(), 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancies $vacancies)
    {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' =>'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            
        ]);

        if ($request->hasFile('image')) {
            if ($vacancies->image) {
                Storage::delete('public/' . $vacancies->image);
            }
            $validated['image'] = $request->file('image')->store('vacancies', 'public');
        }

        $vacancies->update([
            'title' => $request->title,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'image' => $validated['image'] ?? $vacancies->image,
            'description' => strip_tags($request->description),
        ]);

        return redirect()->route('/dashboard.vacancies.vacancies')->with('success', 'Blog berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancies $vacancies)
    {
        // Hapus gambar jika ada
        if ($vacancies->image) {
            Storage::delete('public/'.$vacancies->image);
        }

        // Hapus data vancavy dari database
        $vacancies->destroy($vacancies->id);

        // Redirect ke halaman index vancavies dengan pesan sukses
        return redirect()->route('/dashboard/vacancies')->with('success', 'Vacancies berhasil di hapus.');
    }
}
