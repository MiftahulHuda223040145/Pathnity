<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Vacancies;
use App\Models\Application;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Cviebrock\EloquentSluggable\Services\SlugService;




class VacanciesController extends Controller
{

    public function index()
    {
        $vacancies = Vacancies::paginate(20);
        return view('dashboard.vacancies.vacancies', compact('vacancies'));
    }


    public function create()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('dashorg.create-vacancy', compact('categories', 'types'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'types_id' => 'required|exists:types,id',
            'salary' => 'nullable|numeric', // Validasi salary boleh kosong
            'numberofworker' => 'required|integer|min:1',
        ]);

        // Jika salary kosong, set ke null
        if (empty($validatedData['salary'])) {
            $validatedData['salary'] = null;
        }

        if ($request->has('description')) {
            $validatedData['description'] = strip_tags($request->description);
        }
        // Menambahkan organizer_id
        $validatedData['organizer_id'] = auth('organizer')->id();

        // Menyimpan data ke dalam database
        Vacancies::create($validatedData);

        // Redirect ke halaman dashorg dengan pesan sukses
        return redirect('/dashorg')->with('success', 'Vacancy successfully created!');
    }



    // Menampilkan detail Vacancies
    public function show($id)
    {
        $vacancy = Vacancies::findOrFail($id); // Mengambil data berdasarkan ID

        return view('dashboard.vacancies.detail-vacancy', compact('vacancy')); // Kirim data lowongan ke view
    }

    // Menampilkan form untuk mengedit Vacancies
    public function edit(Vacancies $Vacancies) {}

    // Memperbarui Vacancies yang sudah ada
    public function update(Request $request, Vacancies $Vacancies)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:vacancies,slug,' . $Vacancies->id,
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            if ($Vacancies->image) {
                Storage::delete('public/' . $Vacancies->image);
            }
            $validated['image'] = $request->file('image')->store('vacancies', 'public');
        }

        $Vacancies->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => 'required|string|max:255',
            'description' => strip_tags($request->description),
            'category_id' => $request->category_id,
            'image' => $validated['image'] ?? $Vacancies->image,
        ]);

        return redirect()->route('vacancies.index')->with('success', 'Vacancies berhasil diperbarui!');
    }


    public function destroy(Vacancies $Vacancies)
    {
        if ($Vacancies->image) {
            Storage::delete('public/' . $Vacancies->image);
        }

        Vacancies::destroy($Vacancies->id);

        return redirect('/dashorg')->with('success', 'Vacancies berhasil dihapus!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Vacancies::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function toggleStatus($id)
    {
        $vacancy = Vacancies::findOrFail($id);

        // Ubah status (toggle)
        $vacancy->status = !$vacancy->status;
        $vacancy->save();

        // Redirect kembali ke dashboard
        return redirect()->back()->with('success', 'Vacancy status updated successfully!');
    }
    public function apply(Request $request, $id)
    {
        $vacancy = Vacancies::findOrFail($id);

        $request->validate([
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Cek apakah user sudah melamar
        $existingApplication = Application::where('user_id', Auth::id())
            ->where('vacancy_id', $id)
            ->first();

        if ($existingApplication) {
            return redirect()->back()->withErrors(['error' => 'You have already applied for this vacancy.']);
        }

        // Upload resume jika ada
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Simpan aplikasi
        Application::create([
            'user_id' => Auth::id(),
            'vacancy_id' => $id,
            'cover_letter' => $request->cover_letter,
            'resume' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'You have successfully applied for this vacancy.');
    }
    public function searchVacancies(Request $request)
    {
        // Membuat query untuk mendapatkan lowongan yang statusnya aktif
        $query = Vacancies::with(['category', 'type', 'organizer'])
            ->where('status', 1); // Hanya lowongan aktif

        // Pencarian berdasarkan judul atau nama organisasi
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('organizer', function ($query) use ($request) {
                        $query->where('organization_name', 'LIKE', '%' . $request->search . '%');
                    });
            });
        }

        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter berdasarkan tipe
        if ($request->filled('type')) {
            $query->where('types_id', $request->type);
        }

        // Dapatkan data lowongan
        $vacancies = $query->get();

        // Ambil data kategori dan tipe untuk dropdown filter
        $categories = Category::all();
        $types = Type::all();

        // Mengembalikan view dengan data yang sudah difilter
        return view('search.search-vacancies', compact('vacancies', 'categories', 'types'));
    }
}
