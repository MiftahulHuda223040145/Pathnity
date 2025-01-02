<?php 

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller 
{
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.blogs', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blog.create-blog',
        [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
    
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $allowedTags = '<p><a><strong><b><em><i><ul><li><ol><h1><quote><div><br><del><pre>';
        $validatedData['body'] = strip_tags($request->body, $allowedTags);

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'New post has been added!');
    }

    public function show(Blog $blog)
    {
        return view('dashboard.blog.detail-blog', 
            ['blog' => $blog]);
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit-blog',
            [ 
                'blog' => $blog,
                'categories' => Category::all()
            ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:50',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $allowedTags = '<p><a><strong><b><em><i><ul><li><ol><h1><quote><div><br><del><pre>';
        $validatedData['body'] = strip_tags($request->body, $allowedTags);

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'New post has been added!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        Blog::destroy($Blog->id);
        return redirect('/dashboard/blogs')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}