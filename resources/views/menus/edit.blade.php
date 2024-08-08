@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $menu->price }}" required>
        </div>
        <div class="form-group">
            <label for="additionals">Additionals</label>
            <select multiple class="form-control" id="additionals" name="additionals[]">
                @foreach($additionals as $additional)
                <option value="{{ $additional->id }}" {{ $menu->additionals->contains($additional->id) ? 'selected' : '' }}>{{ $additional->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
