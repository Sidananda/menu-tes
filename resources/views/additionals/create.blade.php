@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Additional</h1>
    <form action="{{ route('additionals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="variants">Variants</label>
            <select multiple class="form-control" id="variants" name="variants[]">
                @foreach($variants as $variant)
                <option value="{{ $variant->id }}">{{ $variant->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
