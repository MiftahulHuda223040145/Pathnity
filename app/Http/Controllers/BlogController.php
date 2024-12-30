<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Menampilkan daftar blog
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    // Menampilkan form untuk membuat blog baru
    public function create()
    {
        return view('blog.create', [
            'categories' => Category::all(), // Mengambil semua kategori
        ]);
    }

    // Menyimpan blog baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'category' => 'required|exists:categories,id', // Validasi kategori yang dipilih
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->category_id = $request->category; // Menyimpan ID kategori yang dipilih

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dibuat!');
    }

    // Menampilkan detail blog
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    // Menampilkan form untuk mengedit blog
    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog,
            'categories' => Category::all(), // Mengambil semua kategori
        ]);
    }

    // Memperbarui blog yang sudah ada
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $blog->id,
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'description' => 'nullable|string',
            'category' => 'required|exists:categories,id', // Validasi kategori yang dipilih
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        }

        // Menyimpan ID kategori yang dipilih
        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'category_id' => $request->category, // Menyimpan kategori
            'image' => $validated['image'] ?? $blog->image, // Memperbarui gambar jika ada
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diperbarui!');
    }

    // Menghapus blog
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus!');
    }

    // Membuat slug otomatis berdasarkan judul
    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->title);
        return response()->json(['slug' => $slug]);
    }
}
