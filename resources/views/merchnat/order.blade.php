@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Orders</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Menu Name</th>
                <th>Customer ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->menu->nama }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->created_at }}</td>
                <td>Rp. {{ number_format($order->total_amount, 2) }}</td>
                <p>Status: {{ $order->status }}</p>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection