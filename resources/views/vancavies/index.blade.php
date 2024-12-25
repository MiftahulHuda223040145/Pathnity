@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Vancavies</h1>
    <a href="{{ route ('vancavies.create')}}" class="btn-primary">Create New Vancavy</a>
    <ul>
        @foreach ($vancavies as $vancavy)
        <li>
            <h2>{{ $vancavy->title }}</h2>
            <p>{{ $vancavy->content }}</p>
            @if($vancavy->image)
                <img src="{{ asset('storage/'. $vancavy->image)}}"width="200">
            @endif
            <a href="{{ route('vancavies.edit', $vancavy) }}">Edit</a>
                <form action="{{ route('vancavies.destroy', $vancavy) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
        </li>
        @endforeach
    </ul>
    @endsection