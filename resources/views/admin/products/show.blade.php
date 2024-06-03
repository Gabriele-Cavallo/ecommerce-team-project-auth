@extends('layouts.admin')

@section('content')
    <h2>{{ $product->name }}</h2>
    <img class="product" src="{{ $product->img }}" alt="{{ $product->name }}">
    <p>{{ $product->price }}€</p>
    <p>{{ $product->description }}</p>
@endsection