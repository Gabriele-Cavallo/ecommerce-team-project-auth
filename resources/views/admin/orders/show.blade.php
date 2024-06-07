@extends('layouts.admin')

@section('content')
    <p><strong>Prezzo totale:</strong> {{ $order->price }}€</p>
    <p><strong>Data dell'ordine:</strong> {{ $order->date }}</p>
    <p><strong>Indirizzo cliente:</strong> {{ $order->address }}</p>
    <p><strong>Pezzi dell'ordine:</strong> {{ $order->amount }}</p>

    <button class="btn btn-primary">
        <a href="{{ route('admin.orders.index')}}">Ritorna</a>
    </button>
@endsection