@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Orders</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Menu</th>
                <th>Merchant</th>
                <th>Ordered At</th>
                <th>Total Amount: </th>
                <th>Status: </th>

            </tr>
        </thead>
        <tbody>
            @if($orders->isEmpty())
            <tr>
                <td colspan="3">No orders found.</td>
            </tr>
            @else
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->menu->nama }}</td>
                <td>{{ $order->menu->merchants->nama_merchant }}</td>
                <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                <td>Rp. {{ number_format($order->total_amount, 2) }}</td>
                <td> {{ $order->status }}</td>

            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection