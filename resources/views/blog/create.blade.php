<x-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Create Blog</h1>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    placeholder="Enter blog title" 
                    id="title" 
                    class="form-control" 
                    required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input 
                    type="text" 
                    name="slug" 
                    placeholder="Slug will be generated automatically" 
                    id="slug" 
                    class="form-control" 
                    disabled readonly
                    readonly>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
               <select class = "form-select" id="category" name="category">
                @foreach ($categories as $category)
                <option value="3">Theree</option>
                @endforeach
            </div>
</select>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input 
                    type="file" 
                    name="image" 
                    id="image" 
                    class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input 
                    id="description" 
                    type="hidden" 
                    name="description" 
                    value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>
            <button 
                type="submit" class="btn btn-primary mt-3">
                Save
            </button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('input', function () {
            fetch(`/create-slug?title=${encodeURIComponent(title.value)}`)
                .then(response => response.json())
                .then(data => {
                    slug.value = data.slug;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</x-layout>
