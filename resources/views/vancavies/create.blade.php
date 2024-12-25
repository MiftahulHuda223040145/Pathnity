<x-layout>
    <h1>Create New Vancavy</h1>

    <form action="{{ route('vancavies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text"  name="title" id="title" value="{{ old('title') }}" required>
        <br><br>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ old('content') }}</textarea>
        <br><br>

        <label>Image:</label>
        <input type="file" name="image" id="image">
<br><br>

        <button type="submit">Submit</button>
    </form>