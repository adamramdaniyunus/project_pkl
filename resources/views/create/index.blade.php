@extends('layout')
@section('content')
<div class="p-4 container d-flex flex-column">
	<form action="/create-data" method="POST">
		@csrf
	<div class="p-4 row ">	
      <div class="col">
        <label for="inputEmail4" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="inputEmail4" name="komputer[user]" placeholder="Masukan nama user">
      </div>
      <div class="col">
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
  </div>


		<table  id="table" class="table table-bordered">
			<tr>
				<th>Komponen</th>
				<th>Tambah Komponen</th>
				<th>Kegiatan</th>
				<th>Cek</th>
				<th>Status</th>
				<th>Catatan</th>
				<th>Hasil</th>
				<th>Tambah Input</th>
			</tr>


			<tr>
				<td rowspan="1"><input  class="form-control" type="text" name="componen[0][komponen]"></td>
				<td><button class="btn btn-warning" name="add" id="add-komponen" type="button">Add</button></td>
				<td><input  class="form-control" type="text" name="kegiatan[0][uraian_kegiatan]"></td>
				  <input type="hidden" name="kegiatan[0][komponen_id]" value="1"> <!-- Hidden input field untuk komponen_id -->
				<td><input  class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[0][cek]"></td>
				 <input type="hidden" name="kegiatan[0][komponen_id]" value="1"> <!-- Hidden input field untuk komponen_id -->
				<td><input  class="form-control" type="text" name="kegiatan[0][status]"></td>
				 <input type="hidden" name="kegiatan[0][komponen_id]" value="1"> <!-- Hidden input field untuk komponen_id -->
				<td><input  class="form-control" type="text" name="kegiatan[0][catatan]"></td>
				 <input type="hidden" name="kegiatan[0][komponen_id]" value="1"> <!-- Hidden input field untuk komponen_id -->
				<td><input  class="form-control" type="text" name="kegiatan[0][hasil]"></td>
				 <input type="hidden" name="kegiatan[0][komponen_id]" value="1"> <!-- Hidden input field untuk komponen_id -->
				<td><button class="btn btn-warning" name="add" id="add" type="button">Add</button></td>
			</tr>
		</table>
		<div class="d-flex">
			<button class="btn btn-success">Submit</button>
		</div>
	</form>

<div class="mt-4">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  		List Komponen dan Kegiatan
		</button>
</div>


	<!-- Scrollable modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable">
	    <div class="modal-content p-4">
	      <div class="modal-header">
	        <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulir</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <table class="table table-bordered">
	        	<thead>
	        		<tr>
	        			<th>Komponen</th>
	        			<th>Tugas</th>
	        		</tr>
	        	</thead>

	        	<tbody>
	        		<tr>
	        			<td rowspan="13">CPU</td>
	        			<td>Cek kebersihan isi dari cpu</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Casing</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Hardisk</td>
	        		</tr>
	        		<tr>
	        			<td>Cek CD/DVD Rom</td>
	        		</tr>
	        		<tr>
	        			<td>Cek posisi Ram</td>
	        		</tr>
	        		<tr>
	        			<td>Bersihkan PSU</td>
	        		</tr>
	        		<tr>
	        			<td>Bersihkan pin ram menggunakan penghapus</td>
	        		</tr>
	        		<tr>
	        			<td>Cek kabel power ke setiap komponen</td>
	        		</tr>
	        		<tr>
	        			<td>Waktu Booting</td>
	        		</tr>
	        		<tr>
	        			<td>Kencangkan Baut-baut</td>
	        		</tr>
	        		<tr>
	        			<td>Cek konektor Mouse</td>
	        		</tr>
	        		<tr>
	        			<td>Cek konektor Keyboard</td>
	        		</tr>
	        		<tr>
	        			<td>Cek koneksi Lan</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="2">Mouse</td>
	        			<td>Cek kabel Mouse</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Optik/ball</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="3">Keyboard</td>
	        			<td>Cek kabel keyboard</td>
	        		</tr>
	        		<tr>
	        			<td>Cek tuts pada keyboard</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Lampu indikator</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="3">Monitor</td>
	        			<td>Cek layar monitor</td>
	        		</tr>
	        		<tr>
	        			<td>Cek kabel VGA</td>
	        		</tr>
	        		<tr>
	        			<td>Cek kabel power/adaptor</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="6">NCT</td>
	        			<td>Cek NCT</td>
	        		</tr>
	        		<tr>
	        			<td>Cek pengaturan NCT</td>
	        		</tr>
	        		<tr>
	        			<td>Cek konektor pada mouse</td>
	        		</tr>
	        		<tr>
	        			<td>Cek konektor Keyboard</td>
	        		</tr>
	        		<tr>
	        			<td>Cek konektor pada Lan</td>
	        		</tr>
	        		<tr>
	        			<td>Cek adaptor</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="4">Printer</td>
	        			<td>Cek kabel pada data printer</td>
	        		</tr>
	        		<tr>
	        			<td>Cek tinta/toner/pita printer</td>
	        		</tr>
	        		<tr>
	        			<td>Cek kebersihan printer</td>
	        		</tr>
	        		<tr>
	        			<td>Cek print test page</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="12">Windows</td>
	        			<td>Cek startup</td>
	        		</tr>
	        		<tr>
	        			<td>Durasi booting booting windows</td>
	        		</tr>
	        		<tr>
	        			<td>Cek resolusi layar</td>
	        		</tr>
	        		<tr>
	        			<td>Disk Clean Up</td>
	        		</tr>
	        		<tr>
	        			<td>Hapus Temp Folder</td>
	        		</tr>
	        		<tr>
	        			<td>user/\local setting\Temp</td>
	        		</tr>
	        		<tr>
	        			<td>windows\Temp</td>
	        		</tr>
	        		<tr>
	        			<td>Clear recent Open</td>
	        		</tr>
	        		<tr>
	        			<td>Kosongkan file user dari my document dan pindahkan ke drive D</td>
	        		</tr>
	        		<tr>
	        			<td>Scandisk drive system & data</td>
	        		</tr>
	        		<tr>
	        			<td>Update Antivirus</td>
	        		</tr>
	        		<tr>
	        			<td>Scan Antivirus</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="4">Aplikasi</td>
	        			<td>Protect FlashDisk</td>
	        		</tr>
	        		<tr>
	        			<td>System Restore</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Aplikasi yang tidak dibutuhkan</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Aplikasi yang belum terinstall</td>
	        		</tr>
	        		<tr>
	        			<td rowspan="4">Email</td>
	        			<td>Cek Email</td>
	        		</tr>
	        		<tr>
	        			<td>Cek Data Email</td>
	        		</tr>
	        		<tr>
	        			<td>Export Data Email</td>
	        		</tr>
	        		<tr>
	        			<td>Backup data Email</td>
	        		</tr>
	        	</tbody>
	        </table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mengerti</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}">
	
</script>
@endsection