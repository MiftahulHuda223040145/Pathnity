<x-layout>
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->description }}</p> <!-- Menggunakan 'description' jika itu nama kolom yang sesuai -->
    
    @if ($blog->image)
        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
    @endif
</x-layout>
