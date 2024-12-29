@extends('layouts.app')

@section('title', 'Edit Vancavy')

@section('content')
    <h1>Edit Vancavy</h1>
    <form action="{{ route('vancavies.update', $vancavy->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $vancavy->title }}" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $vancavy->content }}</textarea>
        <label for="image">Image:</label>
        @if ($vancavy->image)
            <img src="{{ asset('storage/' . $vancavy->image) }}" width="100">
        @endif
        <input type="file" name="image">
        <button type="submit">Update</button>
    </form>
@endsection
