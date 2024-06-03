@extends('layouts.admin')

@section('content')
    <h2>{{ $product->name }}</h2>
    <img class="product" src="{{ $product->img }}" alt="{{ $product->name }}">
    <p>{{ $product->price }}€</p>
    <p>{{ $product->description }}</p>

    <button class="btn btn-primary">
        <a href="{{ route('admin.products.index')}}">Ritorna</a>
    </button>
@endsection