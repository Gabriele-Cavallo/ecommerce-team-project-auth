@extends('layouts.admin')
@section('content')
    @if (empty($orders))
        <div>non ci sono ordini da visualizzare</div>
        
    @else
    <table class="table">
        <thead class="thead-dark">

            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Username</th>
                <th>Quantity</th>
                <th>Address</th>
                <th>Total price</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            
            @foreach ($orders as $order)
            <tr>
                <td>
                    $order->id
                </td>
                <td>
                    $order->date
                </td>
                <td>$order->user_id</td>
                <td>
                    $order->amount
                </td>
                <td>
                    $order->address
                </td>
                <td>
                    $order->price
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@endsection