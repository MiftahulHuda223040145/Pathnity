<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vacancies;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Validation\ValidationException;




class VacanciesController extends Controller
{

    public function index()
    {
        $vacancies = Vacancy::paginate(20);
        return view('dashboard.vacancies.vacancies', compact('vacancies'));
    }


    public function create()
    {
        $categories = Category::all();
        $type = Type::all();
        return view('dashboard.vacancies.create-vacancy', compact('categories'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:vacancies,slug|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:type,id',
        ]);


        $validatedData['description'] = strip_tags($request->description);

        Vacancy::create($validatedData);

        return redirect('/dashboard/vacancies')->with('success', 'Vacancy berhasil dibuat!');
    }

    // Menampilkan detail vacancy
    public function show(Vacancy $vacancy)
    {
        $vacancyById = Vacancies::where('id', $vacancy->id)->first();
        return view('dashboard.vacancies.detail-vacancy', [
            'vacancy' => $vacancyById
        ]);
    }

    // Menampilkan form untuk mengedit vacancy
    public function edit(Vacancy $vacancy)
    {

    }

    // Memperbarui vacancy yang sudah ada
    public function update(Request $request, Vacancy $vacancy)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:vacancies,slug,' . $vacancy->id,
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id', // Validasi kategori_id yang dipilih
        ]);

        if ($request->hasFile('image')) {
            if ($vacancy->image) {
                Storage::delete('public/' . $vacancy->image);
            }
            $validated['image'] = $request->file('image')->store('vacancies', 'public');
        }

        $vacancy->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => 'required|string|max:255',
            'description' => strip_tags($request->description),
            'category_id' => $request->category_id,
            'image' => $validated['image'] ?? $vacancy->image,
        ]);

        return redirect()->route('vacancies.index')->with('success', 'Vacancy berhasil diperbarui!');
    }


    public function destroy(Vacancy $vacancy)
    {
        if ($vacancy->image) {
            Storage::delete('public/' . $vacancy->image);
        }

        Vacancies::destroy($vacancy->id);

        return redirect('/dashboard/vacancies')->with('success', 'Vacancy berhasil dihapus!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Vacancy::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }
}
