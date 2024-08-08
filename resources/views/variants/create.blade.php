@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Variant</h1>
    <form action="{{ route('variants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
