@extends('layouts.admin')

@section('content')
<h2>MODIFICA IL PRODOTTO</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.products.update', $product->slug)}}" method="post">
@csrf
@method('PUT')

{{-- Product name input --}}
<div class="mb-3">
    <label for="name" class="form-label">Product name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ old('name', $product->name)}}">
</div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
{{-- /Product name input --}}

{{-- Price product input --}}
<div class="mb-3">
    <label for="price" name="price" class="form-label">Price :</label>
    <input type="text" class="form-control" id="price" name="client_name" aria-describedby="emailHelp" value="{{ old('price',$product->price)}}">
</div>
@error('client_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
{{-- /Price product input --}}

{{-- Summary text area --}}
<div class="mb-3">
    <label for="description" name="description" class="form-label">Product description: </label>
    <textarea type="text" rows="10" class="form-control" id="description" name="summary" aria-describedby="emailHelp">{{ old('description', $product->description)}}</textarea>
</div>
@error('summary')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
{{-- /Summary text area --}}

{{-- Submit-return button --}}
<button type="submit" class="btn btn-primary">Edit</button>
<button class="btn btn-primary">
    <a class="nav-link text-white" href="{{ route('admin.products.index') }}">
        <i class="fa-solid fa-arrow-left fa-lg fa-fw"></i> Return
    </a>
</button>
{{-- /Submit-return button --}}
</form>
@endsection