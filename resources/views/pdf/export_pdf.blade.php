<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         @page {
            margin-left: 0.1in;
            margin-right: 0.1in;
            margin-top: 0.1in;
            margin-bottom: 0.1in;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin-left: 0.1in;
            margin-right: 0.1in;
            margin-top: 0.1in;
            margin-bottom: 0.1in;
        }

         /* td {
            padding: 5px;
            height: 30px; 
        }

        table {
            margin-bottom: -100px; 
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .table-border{
            border: 3px solid black;
            border-collapse: collapse;
        }
         tr .no-space > td {
            padding: 0;
            margin-top: 0;
            margin-bottom: 0;
        }

        thead tr{
            padding: 20px;
        }
        tr {
            line-height:  
        } */

        td {
            height: 10px;
        }


    </style>
    <title>Detail Komputer</title>
  </head>
  <body>
   <div class="d-flex justify-content-center align-items-center">
        <div class="container p-4 ">
            <div class="row">
                {{-- <table class="table table-bordered" style="height: 50px;">
                    <tr>
                        <td rowspan="4">image</td>
                        <td colspan="2" align="center">PT FUTAMI FOOD & BEVERAGES</td>
                        <td>Document No.</td>
                        <td>:FFB/FRM/IT/03/04</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" rowspan="3">
                            <h5>FORMULIR</h5>
                            <h5>PERWATAN SOFTWARE</h5>
                        </td>
                        <td>Issued Date</td>
                        <td>:03-08-2015</td>
                    </tr>
                    <tr>
                        <td>Revision No.</td>
                        <td>:000</td>
                    </tr>
                    <tr>
                        <td>Page</td>
                        <td>:1 of 1</td>
                    </tr>
                </table> --}}
                <h4>FORMULIR PERWATAN PC:</h4>
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
                        <th style="width: 20px;">NO:</th>
                        <th>Komponen</th>
                    </thead>
                    @foreach ($komputers->componen as $itemComp)
                    <tbody>
                        <td align="center">{{ $loop->iteration }}</td>
                        <td>{{ $itemComp->komponen }}</td>
                    </tbody>     
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">
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
                <div class="mt-0">
                    <label for="">Catatan:</label>
                    <textarea name="" id="" cols="30" rows="10" style="padding-bottom: 20px;"></textarea>
                </div>
                <div style="">
                    <div style="float: left;">
                        <p>Dicek Oleh,</p>
                    </div>
                    <div style="float: right;">
                        Diktahui oleh,
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
  </body>
</html>