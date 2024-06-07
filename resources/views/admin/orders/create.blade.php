@extends('layouts.admin')

@section('content')
    <h1>Create your order</h1>

    <form action="{{ route('admin.orders.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="price" class="form-label">Order total price:</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Order date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">User address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Order total pieces:</label>
            <input type="number" class="form-control" id="amount" name="amount">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
            
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$product->img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
              <div><strong>{{$product->price}}</strong></div>
              <p class="card-text">{{$product->description}}</p>
    
              <a href="{{route('admin.products.show', $product->id)}}" class="btn btn-primary">View</a>
            </div>
          </div>
          
          @endforeach
        </div>
    </div>
@endsection