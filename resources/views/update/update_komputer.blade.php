  @extends('layout')
  @section('content')
<div class="d-flex justify-content-center align-items-center flex-column p-4 ">
  <form method="POST" action="{{route('komputer_update', $komputer->id)}}" class="row g-4 p-4 shadow-sm" style="max-width: 50rem; border-radius: 20px; background: whitesmoke;">
    @csrf
    @method('PUT')
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama User</label>
    <input type="text" class="form-control" id="inputEmail4" name="user" value="{{$komputer->user}}" placeholder="Masukan nama user">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nama PC</label>
    <input type="text" class="form-control" id="inputPassword4" name=" nama_pc" value="{{$komputer->nama_pc}}" placeholder="Masukan nama pc">
  </div>
  <div class="col">
    <label for="inputAddress" class="form-label">Pengecekan Ke</label>
    <input type="text" class="form-control custom-input" name="pengecekan" id="inputAddress" value="{{$komputer->pengecekan}}" placeholder="1234 dst">
  </div>
  <div class="col">
    <label for="inputAddress2" class="form-label">Tanggal Pengecekan</label>
    <input type="date" class="form-control" id="inputAddress2" name="tanggal" value="{{$komputer->tanggal}}" placeholder="2023/01/01">
  </div>
  <div class="col">
    <label for="inputCity" class="form-label">Jam</label>
    <input type="time" class="form-control" id="inputCity" name="jam" value="{{$komputer->jam}}" placeholder="00:00:00">
  </div>
 <div class="col-12 mt-3 d-flex justify-content-between">
        <a type="button" href="/daftar_pc" class="btn btn-warning" style="font-weight: bolder; color: #fff;">Back</a>
        <button type="submit" class="btn btn-primary" style="font-weight: bolder; color: #fff;">Update</button>
    </div>

</form>
</div>




  @endsection