@extends('layouts.app_blog')

@section('content')
<h1>Edit Blog</h1>
<form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" required>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == old('category_id', $blog->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @if ($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" class="mt-2" width="100">
        @endif
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input id="description" type="hidden" name="description" value="{{ old('description', $blog->description) }}">
        <trix-editor input="description"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
@endsection
