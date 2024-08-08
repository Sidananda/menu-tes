@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Variants</h1>
    <a href="{{ route('variants.create') }}" class="btn btn-primary mb-3">Create Variant</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($variants as $variant)
            <tr>
                <td>{{ $variant->name }}</td>
                <td>
                    <a href="{{ route('variants.edit', $variant->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('variants.destroy', $variant->id) }}" method="POST" style="display:inline-block;">
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
