@extends('layouts.dashboard')

@section('content')
<h1>Manage Blog</h1>
<a href="{{ route('blogs.create') }}" class="btn btn-success mb-3">Create New Blog</a>

<div class="row">
@foreach ($blogs as $blog)
<div class="col-md-4 mb-4"> 
    <div class="blog-card">
        @if ($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="card-img-top">
        @else
            <p>No Image Available</p>
        @endif
<div class="card-body">
        <h5 class="card title">{{ $blog->title }}</h5>
        <p class="card-text">{{Str::limit ($blog->description,150) }}</p>

        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-primary">Edit</a>
        
        <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
    </div>
</div>
@endforeach
</div>

div class="mt-4">
    {{ $blogs->links() }} <!--pagination-->
</div>
@endsection
