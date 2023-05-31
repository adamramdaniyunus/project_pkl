  @extends('layout')
  @section('content')
     <div class="container p-4" style="background: whitesmoke;">
        <div class="d-flex justify-content-between mb-2">
            <h3>Daftar PC yang sudah di cek</h3>
            <a href="/add-kegiatan" class="btn btn-success mb-1">Tambah<i class="bi bi-plus-lg" style="font-weight: bolder;"></i></a>
        </div>
                <table id="example2" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Nama User:</th>
                    <th>Nama PC:</th>
                    <th>Ke:</th>
                    <th>Tanggal:</th>
                    <th>Waktu:</th>
                    <th>Detail</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                        use Carbon\Carbon;
                    @endphp
                @foreach($komputers as $komp)
                   <tr> 
                    <td>{{$komp->user}}</td>
                    <td>{{$komp->nama_pc}}</td>
                    <td>{{$komp->pengecekan}}</td>
                    <td>{{Carbon::parse($komp->tanggal)->format('d-m-Y')}}</td>
                    <td>{{Carbon::parse($komp->jam)->format('H:i')}}</td>
                    <td> <a href="{{url('detail/'.$komp->id)}}">Detail PC <i class="bi bi-pen-fill"></i></a></td>
                    <td> <a href="{{ url('komputer/update/'.$komp->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a> | <!-- Button trigger modal -->
                      <button type="button" class="" style="border: none; background: whitesmoke;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       <i class="bi bi-trash" style="color: red;"></i>
                      </button> 

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Apakah Yakin ingin menghapus?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <a href="{{route('delete', ['id'=> $komp->id])}}  onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data?')) { document.getElementById('delete-form-{{ $komp->id }}').submit(); }" class="btn btn-danger">Hapus</a>
                            </div>
                          </div>
                        </div>
                      </div> </td>
                  </tr>
                  <form id="delete-form-{{ $komp->id }}" action="{{ route('delete', ['id' => $komp->id]) }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  @endforeach
                </table>
              </div>
  @endsection
  