@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Additional</h1>
    <form action="{{ route('additionals.update', $additional->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $additional->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $additional->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="variants">Variants</label>
            <select multiple class="form-control" id="variants" name="variants[]">
                @foreach($variants as $variant)
                <option value="{{ $variant->id }}" {{ $additional->variants->contains($variant->id) ? 'selected' : '' }}>{{ $variant->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
