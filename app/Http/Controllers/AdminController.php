<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organizer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data user dari tabel users
        $users = User::all();

        return view('dashboard.users.users', compact('users'));
    }


    public function show($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('dashboard.users.show', compact('user')); // Tampilkan halaman detail
    }
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('dashboard.users.edit', compact('user')); // Tampilkan halaman edit
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->delete(); // Hapus user
        return redirect()->route('dashboard.users.users')->with('success', 'User deleted successfully!');
    }
    public function search(Request $request)
    {
        $query = $request->get('query');

        // Jika query kosong, ambil semua data
        if ($query) {
            $users = User::where('first_name', 'like', "%{$query}%")
                ->orWhere('last_name', 'like', "%{$query}%")
                ->get();
        } else {
            $users = User::all(); // Ambil semua data pengguna jika query kosong
        }

        // Mengembalikan data dalam bentuk JSON
        return response()->json([
            'users' => $users
        ]);
    }

    public function indexOrg()
    {
        // Ambil semua data organizer dari tabel organizers
        $organizers = Organizer::all();

        // Kirim data organizer ke view
        return view('dashboard.organizer.organizer', compact('organizers'));
    }

    public function showOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Tampilkan halaman detail dengan data organizer
        return view('dashboard.organizer.show', compact('organizer'));
    }

    public function editOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Tampilkan halaman edit dengan data organizer
        return view('dashboard.organizer.edit', compact('organizer'));
    }

    public function destroyOrganizer($id)
    {
        // Cari organizer berdasarkan ID
        $organizer = Organizer::findOrFail($id);

        // Hapus data organizer
        $organizer->delete();

        // Redirect kembali ke halaman organizer dengan pesan sukses
        return redirect()->route('dashboard.organizer.organizer')->with('success', 'Organizer deleted successfully!');
    }

    public function searchOrganizer(Request $request)
    {
        $query = $request->get('query');

        // If there is a search query, filter the organizers
        if ($query) {
            $organizers = Organizer::where('organization_name', 'like', "%{$query}%")
                ->orWhere('username', 'like', "%{$query}%")
                ->orWhere('email', 'like', "%{$query}%")
                ->get();
        } else {
            // If no query, return all organizers
            $organizers = Organizer::all();
        }

        // Return the response in JSON format
        return response()->json([
            'organizers' => $organizers
        ]);
    }

    public function indexBlog()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.blogs', compact('blogs'));
    }

    public function createBlog()
    {
        return view('dashboard.blog.create-blog',
        [
            'categories' => Category::all()
        ]);
    }

    public function storeBlog(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:50',
            'slug' => 'required|unique:blogs',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
    
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $allowedTags = '<p><a><strong><b><em><i><ul><li><ol><h1><quote><div><br><del><pre>';
        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['body'] = strip_tags($request->body, $allowedTags);

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'New post has been added!');
    }

    public function showBlog(Blog $blog)
    {
        return view('dashboard.blog.detail-blog', 
            ['blog' => $blog]);
    }

    public function editBlog(Blog $blog)
    {
        return view('dashboard.blog.edit-blog',
            [ 
                'blog' => $blog,
                'categories' => Category::all()
            ]);
    }

    public function updateBlog(Request $request, Blog $blog)
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
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $allowedTags = '<p><a><strong><b><em><i><ul><li><ol><h1><quote><div><br><del><pre>';
        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['body'] = strip_tags($request->body, $allowedTags);

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'New post has been added!');
    }

    public function destroyBlog(Blog $blog)
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
