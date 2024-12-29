@extends('layouts.app')

@section('title', 'Vancavies List')

@section('content')
    <h1>Vancavies List</h1>
    <a href="{{ route('vancavies.create') }}">Create New</a>
    @foreach ($vancavies as $vancavy)
        <div>
            <h2>{{ $vancavy->title }}</h2>
            <p>{{ $vancavy->content }}</p>
            @if ($vancavy->image)
                <img src="{{ asset('storage/' . $vancavy->image) }}" width="100">
            @endif
            <a href="{{ route('vancavies.edit', $vancavy->id) }}">Edit</a>
            <form action="{{ route('vancavies.destroy', $vancavy->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
