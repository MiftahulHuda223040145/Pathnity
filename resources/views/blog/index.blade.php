<x-layout>
    <h1>Blog</h1>
    <a href="{{ route('blogs.create') }}">  Create New Blog</a>

    @foreach ($blogs as $blog) 
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
    <form action="{{ route('blogs.destroy',$blog) }}">Edit</a>
        <form action="{{ route('blogs.destroy',$blog) }}" method="POST" onsubmit="return confirm('Are you sure?')">

        </form>
        
    @endforeach