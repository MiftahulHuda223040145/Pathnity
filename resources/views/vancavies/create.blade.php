@extends('layouts.app')

@section('title', 'Create Vancavy')

@section('content')
    <h1>Create Vancavy</h1>
    <form action="{{ route('vancavies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="image">Image:</label>
        <input type="file" name="image">
        <button type="submit">Submit</button>
    </form>
@endsection
