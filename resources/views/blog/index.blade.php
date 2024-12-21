<x-layout>
    <h1>Blog</h1>
    <a href="{{ route('blogs.create') }}" style="display: inline-block; margin-bottom: 30px; text-decoration: none; background-color: #4CAF50; color: white; padding: 9px 16px; border-radius: 5px;">Create New Blog</a>

    @foreach ($blogs as $blog) 
        <div style="border: 1px solid #ddd; margin-bottom: 20px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            {{-- Tampilkan Gambar --}}
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; max-width: 400px; height: auto; border-radius: 5px; margin-bottom: 10px;">
            @else
                <p style="color: red;">No Image Available</p>
            @endif
`
            {{-- Tampilkan Judul dan Konten --}}
            <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $blog->title }}</h2>
            <p>{{ $blog->content }}</p>

            {{-- Tombol Edit --}}
            <a href="{{ route('blogs.edit', $blog) }}" style="text-decoration: none; color: white; background-color: #2196F3; padding: 5px 10px; border-radius: 5px;">Edit</a>

            {{-- Tombol Delete --}}
            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="background-color: #f44336; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">Delete</button>
            </form>
        </div>
    @endforeach  
</x-layout>
