@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card card-primary card-outline" style="width: 350px;">
            <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                    src="{{ asset('/asset/img/profile.png') }}"
                    alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">Staff IT</p>

                <div class="list-group list-group-unbordered mb-3">
                    <b>PC yang sudah di cek</b> <a class="float-right">{{ $jumlahData }}</a>
                </div>           
                    <div class="flex">
                        <a href="{{url('edit-password/'.$user->id)}}" class="btn btn-primary"><b>Edit Password</b></a>
                    </div>
               
            </div>
        </div>
    </div>
@endsection