<x-layout>
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for = "title" class="form-label">Title</label>
        <input type="text" name="title" placeholder="Title" id="id" required>
        </div>
        <div class="mb-3">
            <label for = "slug" class="form-label">Slug</label>
            <input type="text" name="slug" placeholder="slug" id="id" required>
            </div>
            <div class="mb-3">
                <label for = "category" class="form-label">Category</label>
                <input type="text" name="category" placeholder="category" id="category" required>
                </div>
                <div class="mb-3">
                    <label for = "image" class="form-label">Image</label>
                    <input type="file" name="image" placeholder="image" id="id" required >
                    <button type="submit">Save</button>
    </form>
</x-layout>
