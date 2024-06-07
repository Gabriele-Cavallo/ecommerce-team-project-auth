@extends('layouts.admin')

@section('content')
    <h1>Create a new product</h1>
    
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Product price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="img" class="form-label">Product image</label>
            <input type="text" class="form-control" id="img" name="img" value="https://picsum.photos/200/300">
        </div>
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection