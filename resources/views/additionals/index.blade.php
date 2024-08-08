@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Additionals</h1>
    <a href="{{ route('additionals.create') }}" class="btn btn-primary mb-3">Create Additional</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($additionals as $additional)
            <tr>
                <td>{{ $additional->name }}</td>
                <td>{{ $additional->description }}</td>
                <td>
                    <a href="{{ route('additionals.edit', $additional->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('additionals.destroy', $additional->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
