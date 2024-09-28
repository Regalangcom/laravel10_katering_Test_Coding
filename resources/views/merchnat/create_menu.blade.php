<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title">Formulir Tambah Menu</h4>
            </div>
            <div class="card-body bg-white">
                <form method="post" action="{{ route('merchant.store_menu') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Menu</label>

                        <div class="col-md-6">
                            <input id="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama">

                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-md-4 col-form-label text-md-end">Harga Menu</label>

                        <div class="col-md-6">
                            <input id="harga" type="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga">

                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-md-4 col-form-label text-md-end">Deskripsi Menu</label>

                        <div class="col-md-6">
                            <textarea id="deskripsi" type="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gambar" class="col-md-4 col-form-label text-md-end">gambar Menu</label>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="gambar" name="gambar" type="file" class="form-control" id="inputGroupFile02">
                            </div>

                            @error('gambar')
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