<x-layout>
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    @if ($blog->image)
        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
    @endif
</x-layout>
