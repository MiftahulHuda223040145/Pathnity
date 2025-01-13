<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Validation\ValidationException;




class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::paginate(20);
        return view('dashboard.blog.blogs', compact('blogs'));
    }
    public function indexMainPage(Request $request)
    {
        // Build query for fetching blogs
        $query = Blog::with(['category']);

        // If there's a search term, filter blogs by title or category name
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhereHas('category', function ($query) use ($request) {
                        $query->where('name', 'like', '%' . $request->search . '%');
                    });
            });
        }

        $blogs = $query->paginate(10);

        return view('blog.blogs', compact('blogs'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('dashboard.blog.create-blog', compact('categories'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug|max:255',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blogs', 'public');
        }

        $validatedData['description'] = strip_tags($request->description);

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'Blog berhasil dibuat!');
    }

    // Menampilkan detail blog
    public function show(Blog $blog)
    {
        $blogById = Blog::where('id', $blog->id)->first();
        return view('dashboard.blog.detail-blog', [
            'blog' => $blogById
        ]);
    }
    public function showDetails($id)
    {
        // Fetch the blog by ID
        $blog = Blog::with('category')->findOrFail($id);

        return view('blog.blog', compact('blog'));
    }

    // Menampilkan form untuk mengedit blog
    public function edit(Blog $blog)
    {
        $blogById = Blog::where('id', $blog->id)->first();
        return view('dashboard.blog.edit', [
            'blog' => $blogById,
            'categories' => Category::all(), // Mengambil semua kategori
        ]);
    }

    // Memperbarui blog yang sudah ada
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id', // Validasi kategori_id yang dipilih
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => 'required|string|max:255',
            'description' => strip_tags($request->description),
            'category_id' => $request->category_id,
            'image' => $validated['image'] ?? $blog->image,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diperbarui!');
    }

    // Menghapus blog
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        Blog::destroy($blog->id);

        return redirect('/dashboard/blogs')->with('success', 'Blog berhasil dihapus!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
