<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tugas;


class DataSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Tugas::create([
            'uraian_kegiatan'=>'Cek kebersihan isi cpu dari debu',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek casing',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek hardisk',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek CD/DVD rom',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek Posisi ram',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Bersihkan pin ram menggunakan penghapus',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Bersihkan PSU',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek kabel power ke setiap komponen',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Waktu booting',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Kencangkan baut-baut',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek konektor mouse',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek konektor keyboard',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek konektor Lan',
            'componen_id'=> 1
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek kabel mouse',
            'componen_id'=> 2
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek Optik/ball Mouse',
            'componen_id'=> 2
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Cek kabel keyboard',
            'componen_id'=> 3
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek tuts pada keyboard',
            'componen_id'=> 3
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek lampu indikator',
            'componen_id'=> 3
        ]);
          Tugas::create([
            'uraian_kegiatan'=>'Cek layar monitor',
            'componen_id'=> 4
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek kabel VGA',
            'componen_id'=> 4
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek kabel power/adaptor',
            'componen_id'=> 4
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Cek NCT',
            'componen_id'=> 5
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek pengaturan NCT',
            'componen_id'=> 5
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek konektor Mouse',
            'componen_id'=> 5
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek konektor keyboard',
            'componen_id'=> 5
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek Konektor Lan',
            'componen_id'=> 5
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek adaptor',
            'componen_id'=> 5
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Cek kabel data printer',
            'componen_id'=> 6
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek tinta/toner/pita printer',
            'componen_id'=> 6
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek kebersihan printer',
            'componen_id'=> 6
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek print test page',
            'componen_id'=> 6
        ]);

        Tugas::create([
            'uraian_kegiatan'=>'Cek Startup',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Durasi saat booting windows',
            'componen_id'=> 7  
        ]);
          Tugas::create([
            'uraian_kegiatan'=>'Cek saat shutdown windows',
            'componen_id'=> 7  
        ]);
           Tugas::create([
            'uraian_kegiatan'=>'Cek resolusi layar',
            'componen_id'=> 7  
        ]);
            Tugas::create([
            'uraian_kegiatan'=>'Disk Clean Up',
            'componen_id'=> 7  
        ]);
          Tugas::create([
            'uraian_kegiatan'=>'Hapus Temp Folder',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'/user/\local setting\Temp',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'\windows\prefect',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'\windows\Temp',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Clear Receant Open',
            'componen_id'=> 7  
        ]);
         Tugas::create([
            'uraian_kegiatan'=>'Kosongkan file dari my document dan pindahkan ke drive D',
            'componen_id'=> 7  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Scandisk drive system & data',
            'componen_id'=> 7  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Update Antivirus',
            'componen_id'=> 7  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Scan Antivirus',
            'componen_id'=> 7  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Protected Flashdisk',
            'componen_id'=> 8  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'System Restore',
            'componen_id'=> 8  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek aplikasi yang tidak dibutuhkan',
            'componen_id'=> 8  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek aplikasi yang belum di install',
            'componen_id'=> 8  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek Email',
            'componen_id'=> 9 
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Cek Data Email',
            'componen_id'=> 9  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Export Data Email',
            'componen_id'=> 9  
        ]);
        Tugas::create([
            'uraian_kegiatan'=>'Backup Data Email',
            'componen_id'=> 9  
        ]);


    }
}


               