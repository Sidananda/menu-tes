@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Menu</h1>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="additionals">Additionals</label>
            <select multiple class="form-control" id="additionals" name="additionals[]">
                @foreach($additionals as $additional)
                <option value="{{ $additional->id }}">{{ $additional->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
