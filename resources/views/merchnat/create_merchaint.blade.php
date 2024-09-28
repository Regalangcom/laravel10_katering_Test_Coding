@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title">Formulir Merchaint Baru</h4>
            </div>
            <div class="card-body bg-white">
                <form method="post" action="{{ route('merchant.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama_merchant" class="col-md-4 col-form-label text-md-end">Nama Merchant</label>

                        <div class="col-md-6">
                            <input id="nama_merchant" type="nama_merchant" class="form-control @error('nama_merchant') is-invalid @enderror" name="nama_merchant" value="{{ old('nama_merchant') }}" required autocomplete="nama_merchant">

                            @error('nama_merchant')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-md-4 col-form-label text-md-end">Alamat </label>

                        <div class="col-md-6">
                            <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kontak" class="col-md-4 col-form-label text-md-end">Kontak</label>

                        <div class="col-md-6">
                            <input id="kontak" type="kontak" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" required autocomplete="kontak">

                            @error('kontak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="deskripsi" class="col-md-4 col-form-label text-md-end">Deskripsi</label>

                        <div class="col-md-6">
                            <textarea id="deskripsi" type="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection