@extends('layout')
@section('content')
<div class="d-flex justify-content-center align-items-center">
<div class="container p-4 ">
    <div class="row">
        <h2>Detail Komputer:</h2>
        <table class="table table-bordered table-striped">
            <thead >
                <tr>
                    <th>Nama User</th>
                    <th>Nama PC</th>
                    <th>Pengecekan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $komputers->user }}</td>
                    <td>{{ $komputers->nama_pc }}</td>
                    <td>{{ $komputers->pengecekan }}</td>
                    <td>{{ $komputers->tanggal }}</td>
                    <td>{{ $komputers->jam }}</td>
                </tr>
            </tbody>
        </table>
    </div>
  
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <th>NO</th>
                <th>Komponen</th>
            </thead>
            @foreach ($komputers->componen as $itemComp)
            <tbody>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemComp->komponen }}</td>
            </tbody>     
            @endforeach
        </table>
        <div class="col">
           <table class="table table-bordered"> 
                <thead align="center"> 
                    <th>Uraian Kegiatan</th>
                    <th>Cek</th>
                    <th>Status</th>
                    <th>Catatan</th>
                <th>Hasil</th>
                    </thead>
                <tbody>
            @foreach ($komputers->kegiatan as $item)
                    <tr>
                        <td>{{ $item->uraian_kegiatan }}</td>
                        <td>
                            {{ $item->cek }}
                        </td>
                        <td>
                        {{ $item->status }}
                        </td>
                        <td>
                        {{ $item->catatan }}
                        </td>
                        <td>
                            {{ $item->hasil }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
        <div class="d-flex justify-content-between">
            <a href="/daftar_pc" type="button" class="btn btn-danger">Back</a>
            <a href="/export-pdf/{{ $komputers->id }}" type="button" class="btn btn-success">Export to PDF</a>
        </div>
    </div>
</div>
</div>
@endsection
    