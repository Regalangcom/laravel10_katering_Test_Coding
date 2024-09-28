@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        @foreach ($menus as $menu)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    {{$menu->merchants->nama_merchant}}
                </div>
                <div class="card-body">
                    <img class="img-fluid " src="{{ asset('storage/' . $menu->gambar) }}" alt="">
                    <h1 class="mt-2">{{ $menu['nama']}}</h1>
                    <h3>Rp. {{ $menu['harga']}}</h3>
                    <p>{{ $menu['deskripsi']}}</p>
                    <form action="{{ route('customer.order') }}" method="POST">
                        @csrf
                        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                        <button type="submit" class="btn btn-primary">Order</button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection