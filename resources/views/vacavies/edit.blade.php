<x-layout>
    <h1>Edit Vancavy</h1>

    <form action="{{ route('vancavies.update',$vancavy->id) }}" method = "POST" enctype = "multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $vancavy->title }}" required>
        <br><br>

        <label for="contont">Contont:</label>
        <textarea name="content" id="content" rows="5" required>{{ $vancavy->content }}</textarea>
        <br><br>

        <label for="image">Current Image:</label>
        @if ($vancavy->image)
        <img src="{{ asset('storage/' . $vancavy->image)}}" alt="Image of{{ $vancavy->title }}" width="200">
        @else
        <p>No Image Available</p>
        @endif
        <br><br>

        <label for="image">New Image:</label>
        <input type="file" name="image" id="image">
        <br><br>

        <button type="submit">Update</button>
    </form>
</x-layout>