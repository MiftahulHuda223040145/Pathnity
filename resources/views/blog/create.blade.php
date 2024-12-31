@extends('layouts.app_blog') 

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" placeholder="Enter blog title" id="title" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="slug" name="slug" placeholder="Slug will be generated automatically" id="slug" class="form-control" disabled readonly>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id" required>
                <option value="" disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
            <trix-editor input="description"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    // Event listener untuk membuat slug otomatis
    title.addEventListener('change', function () {
        fetch('/dashboard/blog/checkSlug?title=' + encodeURIComponent(title.value))
            .then(response => response.json())
            .then(data =>   slug.value = data.slug)
            .catch(error => console.error('Error:', error));
    });
</script>  

@if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
@endsection
