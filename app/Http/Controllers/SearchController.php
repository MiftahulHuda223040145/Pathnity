<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('search', '');
        $location = $request->input('location', '');

        $vacancies = Vacancies::with(['category', 'type', 'organizer'])
            ->where('status', 1);

        // If a search query is provided, filter based on the title
        if ($query) {
            $vacancies->where('title', 'LIKE', '%' . $query . '%');
        }

        // If location is provided, filter based on the address field in the organizer
        if ($location) {
            $vacancies->whereHas('organizer', function ($query) use ($location) {
                $query->where('address', 'LIKE', '%' . $location . '%');
            });
        }

        // Execute the query and get the filtered vacancies
        $vacancies = $vacancies->get();

        // Get all categories and types for the filter dropdowns
        $categories = Category::all();
        $types = Type::all();

        // Return the results to the view
        return view('search.search', compact('vacancies', 'categories', 'types',));
    }


    public function index(Request $request)
    {
        $query = Vacancies::with(['category', 'type', 'organizer'])
            ->where('status', 1); // Hanya lowongan aktif

        // Filter berdasarkan teks pencarian
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter berdasarkan tipe pekerjaan
        if ($request->filled('type')) {
            $query->where('types_id', $request->type);
        }
        if ($request->filled('location')) {
            $query->whereHas('organizer', function ($query) use ($request) {
                $query->where('address', 'LIKE', '%' . $request->location . '%');
            });
        }

        $vacancies = $query->get();
        $categories = Category::all();
        $types = Type::all();

        return view('search.search-vacancies', compact('vacancies', 'categories', 'types'));
    }


    public function vacancyDetails($id)
    {
        // Ambil detail lowongan berdasarkan ID
        $vacancy = Vacancies::with(['category', 'type', 'organizer'])->findOrFail($id);

        // Ambil data lowongan lain yang aktif untuk ditampilkan di daftar
        $vacancies = Vacancies::with(['category', 'type', 'organizer'])
            ->where('status', 1)
            ->get();

        // Ambil kategori dan tipe untuk filter
        $categories = Category::all();
        $types = Type::all();

        // Kirim data ke view
        return view('search.search-vacancies', compact('vacancy', 'vacancies', 'categories', 'types'));
    }
    public function searchVacancies(Request $request)
    {
        $query = Vacancies::with(['category', 'type', 'organizer'])->where('status', 1); // Only active vacancies

        // Filter based on the search term
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhereHas('category', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->orWhereHas('organizer', function ($query) use ($request) {
                    $query->where('organization_name', 'like', '%' . $request->search . '%')
                        ->orWhere('address', 'like', '%' . $request->search . '%');
                });
        }

        // Paginate the search results
        $vacancies = $query->paginate(10);

        return view('search.search', compact('vacancies'));
    }
}
