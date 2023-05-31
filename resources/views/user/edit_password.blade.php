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
                <form action="{{ route('edit_user', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="list-group list-group-unbordered mb-3">
                        <input type="text" class="form-control mb-3" name="name" value="{{ $user->name }}">
                        <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                    </div>
                    <div class="flex">
                        <button type="submit" class="btn btn-primary"><b>Edit</b></button>
                    </div>
                </form>        
               
            </div>
        </div>
    </div>
@endsection