var i = 0
	// inputan id 1
	$('#add').click(function() {
		++i
		let componen1 = 1
		$('#table').append(
			`<tr>
			<td></td>	
			<td></td>	
			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
			<td><input  class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
			</tr>`
		)
	})
	// komponen id 2
	$('#add-komponen').click(function() {
		++i
		let componen2 = 2;
		$('#table').append(
			`<tr id="table-2">
				<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
				<td><button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
				<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
				<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
				<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
				<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
				<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
				<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
			</tr>`
		)
	})
	// // inputan id 2
	// $(document).on('click', '#add-inputan-2', function() {
	// 	++i;
	// 	let componen2 = 2;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen2}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen2}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen2}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen2}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen2}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	);
	// });

	// // komponen id 3
	// $(document).on('click', '#add-komponen-3', function() {
	// 	++i
	// 	let componen3 = 3;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-4" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-4" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })

	// // inputan id 3
	// 	$(document).on('click', '#add-inputan-3', function() {
	// 	++i;
	// 	let componen3 = 3;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen3}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	);
	// });


	// // komponen id 4
	// $(document).on('click', '#add-komponen-4', function() {
	// 	++i
	// 	let componen4 = 4;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-5" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-4" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })


	// // inputan id 4
	// 	$(document).on('click', '#add-inputan-4', function() {
	// 	++i;
	// 	let componen4 = 4;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen4}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })


	// // komponen id 5
	// $(document).on('click', '#add-komponen-5', function() {
	// 	++i
	// 	let componen5 = 5;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-6" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-5" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })

	
	// // inputan id 5
	// 	$(document).on('click', '#add-inputan-5', function() {
	// 	++i;
	// 	let componen5 = 5;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen5}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })

	// // komponen id 6
	// $(document).on('click', '#add-komponen-6', function() {
	// 	++i
	// 	let componen6 = 6;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-7" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-6" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })

	// // inputan id 6
	// 	$(document).on('click', '#add-inputan-6', function() {
	// 	++i;
	// 	let componen6 = 6;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen6}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })

	// // komponen id 7
	// $(document).on('click', '#add-komponen-7', function() {
	// 	++i
	// 	let componen7 = 7;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-8" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-7" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })


	// // inputan id 7
	// 	$(document).on('click', '#add-inputan-7', function() {
	// 	++i;
	// 	let componen7 = 7;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen7}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })

	// // komponen id 8
	// $(document).on('click', '#add-komponen-8', function() {
	// 	++i
	// 	let componen8 = 8;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-warning" name="add" id="add-komponen-9" type="button">Next</button> |<button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-8" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })

	// // inputan id 8
	// 	$(document).on('click', '#add-inputan-8', function() {
	// 	++i;
	// 	let componen8 = 8;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen8}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })

	// // komponen id 9
	// $(document).on('click', '#add-komponen-9', function() {
	// 	++i
	// 	let componen9 = 9;
	// 	$('#table').append(
	// 		`<tr id="table-2">
	// 			<td rowspan="1"><input  class="form-control" type="text" name="componen[{${i}}][komponen]"></td>
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Del</button></td>
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="" type="checkbox" value="1" style="width: 100%; height: 100%; margin-top: 0.8rem;" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input  class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-warning" name="add" id="add-inputan-9" type="button">Add</button></td>
	// 		</tr>`
	// 	)
	// })

	// // inputan id 9
	// 	$(document).on('click', '#add-inputan-9', function() {
	// 	++i;
	// 	let componen9 = 9;
	// 	$('#table').append(
	// 		`<tr>
	// 			<td></td>    
	// 			<td></td>    
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][uraian_kegiatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="" type="checkbox" style="width: 100%; height: 100%; margin-top: 0.8rem;" value="1" onclick="updateCheckboxValue" name="kegiatan[${i}][cek]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][status]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][catatan]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><input class="form-control" type="text" name="kegiatan[${i}][hasil]"></td>
	// 			<input type="hidden" name="kegiatan[${i}][komponen_id]" value="${componen9}"> <!-- Hidden input field untuk komponen_id -->
	// 			<td><button class="btn btn-danger remove-table-row" name="add" id="add">Hapus</button></td>
	// 		</tr>`
	// 	)
	// })


	// // $(document).on('click', '.remove-table-row2', function() {
	// // 	var rowId = $(this).closest('tr').attr('id'); // Mendapatkan ID dari baris tabel
	// // 	$(`#tabel-2`).remove(); // Menghapus baris tabel berdasarkan ID
	// // });
		

	$(document).on('click', '.remove-table-row', function(){
		$(this).parents('tr').remove()
	})

	 function updateCheckboxValue(checkbox) {
        if (!checkbox.checked) {
            checkbox.value = "0";
        }
    }