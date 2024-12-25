<x-layout>
    <h1>{{ $vancavy->title }}</h1>
    <p>{{ $vancavy->content }}</p>

    @if($vancavy->image)
    <img src="{{ asset('storage/' . $vancavy->image) }}" alt=" Image of {{ $vancavy->title }}" width="200">
    @else
    <p>No Image Available</p>
    @endif

    <a href="{{ route('vancavies.edit',$vancavy->id) }}">Edit</a>
    <form action="{{ route('vancavies.destroy',$vancavy->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</x-layout>