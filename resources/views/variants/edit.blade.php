@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Variant</h1>
    <form action="{{ route('variants.update', $variant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $variant->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
