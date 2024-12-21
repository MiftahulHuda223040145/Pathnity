@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Vancavies</h1>
    <a href="{{ route ('vancavies.create')}}" class="btn-primary">Tambah Data</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vancavies as $item)
                <tr>
                    <td>{{ $item->title}}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image)}}"width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('vancavies.show',$item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('vancavies.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('vancavies.destroy',$item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
    </table>
</div>

@endsection