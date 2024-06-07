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
@endsection