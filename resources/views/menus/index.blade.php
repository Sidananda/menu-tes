@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Menus</h1>
    <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Create Menu</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->price }}</td>
                <td>
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
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
