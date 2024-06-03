@extends('layouts.admin')

@section('content')
    <h1>Create a new product</h1>
    
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Product price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Product image</label>
            <input type="text" class="form-control" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection