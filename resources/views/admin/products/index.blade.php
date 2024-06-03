@extends('layouts.admin')

@section('content')
<div class="row">

    @foreach ($products as $product)
    <div class="col-3">

        <div class="card" style="width: 18rem;">
            <img src="{{$product->img}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <div><strong>{{$product->price}}€</strong></div>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('admin.products.show', ['product'=> $product->id])}}">Mostramelo</a>
                <a class="btn btn-primary" href="{{route('admin.products.edit', ['product'=> $product->id])}}">Modificamelo</a>
            </div>
            <div class="bg-danger">
                <form action="{{route('admin.products.destroy', ['product'=> $product->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">cancellamelo</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
