<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi gambar
        ]);
    
        // Simpan data ke database
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
    
        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath; // Simpan path ke kolom 'image'
        }
    
        $blog->save();
    
        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dibuat!');
    }
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blogs');
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
