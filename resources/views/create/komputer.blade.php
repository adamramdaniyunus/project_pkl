  @extends('layout')
  @section('content')
<div class="d-flex justify-content-center align-items-center flex-column p-4 ">
      <form method="POST" action="{{route('komputer_create')}}" class="row g-4 p-4 shadow-sm" style="max-width: 50rem; border-radius: 20px; background: whitesmoke;">
        @csrf
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="inputEmail4" name="komputer[user]" placeholder="Masukan nama user">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nama PC</label>
        <input type="text" class="form-control" id="inputPassword4" name="komputer[nama_pc]" placeholder="Masukan nama pc">
      </div>
      <div class="col">
        <label for="inputAddress" class="form-label">Pengecekan Ke</label>
        <input type="text" class="form-control custom-input" name="komputer[pengecekan]" id="inputAddress" placeholder="1234 dst">
      </div>
      <div class="col">
        <label for="inputAddress2" class="form-label">Tanggal Pengecekan</label>
        <input type="date" class="form-control" id="inputAddress2" name="komputer[tanggal]" placeholder="2023/01/01">
      </div>
      <div class="col">
        <label for="inputCity" class="form-label">Jam</label>
        <input type="time" class="form-control" id="inputCity" name="komputer[jam]" placeholder="00:00:00">
  </div>
        
    <div class="p-4" style="background: #fff;">
    <table class="table table-bordered"> 
      <thead align="center"> 
       <th>No</th>
         <th>Jenis Perawatan</th>
        <th>Uraian Kegiatan</th>
        <th>Cek</th>
         <th>Status</th>
         <th>Catatan</th>
       <th>Hasil</th>
        </thead>
    <tbody>
@php
    $i = 0;
@endphp

 @foreach ($komponenHardware as $index => $item)
    <tr>
        <td rowspan="{{ count($item->tugas) + 1 }}">{{ $index + 1 }}</td>
        <td rowspan="{{ count($item->tugas) + 1 }}" align="center">{{ $item->komponen }}</td>
    </tr>
    
    @foreach ($item->tugas as $tugasIndex => $tugasItem)
        <tr>
            <td>{{ $tugasItem->uraian_kegiatan }}</td>
            <td>
                <input type="checkbox" value="1" name="status[{{ $i }}][cek]" style="width: 100%;" onclick="updateCheckboxValue(this)">
            </td>
            <td>
                <input type="text" style="width: 4rem; border: none;" name="status[{{ $i }}][status]">
            </td>
            <td>
                <input type="text" style="width: 4rem; border: none;" name="status[{{ $i }}][catatan]">
            </td>
            <td>
                <input type="text" style="width: 4rem; border: none;" name="status[{{ $i }}][hasil]">
            </td>
        </tr>

        @php
            $i++;
        @endphp
    @endforeach
@endforeach


    </tbody>


 </table>
 </div>
         <div class="col-12 mt-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-warning" style="font-weight: bolder; color: #fff;">Submit</button>
        </div>

</form>


</div>
<script>
    function updateCheckboxValue(checkbox) {
        if (!checkbox.checked) {
            checkbox.value = "0";
        }
    }
</script>




  @endsection