<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card mt-5">
            <div class="card-header">
                <h4 class="card-title">Profile</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Nama Lengkap :</strong> {{ $user->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email :</strong> {{ $user->email }}
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
@endsection