@extends('layout')
@section('content')
 <div class="content-header">
      <div class="container">
        <div class="row mb-2 p-4">
          <div class="col-sm-6 bg-dark p-4 rounded shadow">
            <h1 class="m-0" style="font-size: 2rem; font-weight: bolder;">Dashboard</h1>
            <p>Selamat datang {{Auth::user()->name}}</p>
          </div>
      </div>
    </div>
@endsection