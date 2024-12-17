<x-layout>
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $blog->title }}" required>
        <textarea name="content" required>{{ $blog->content }}</textarea>
        <input type="file" name="image">
        <button type="submit">Update</button>
    </form>
</x-layout>
