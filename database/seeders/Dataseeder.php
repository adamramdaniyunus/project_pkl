<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Componen;


class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Componen::create([
            'komponen'=>'cpu'
        ]);
        Componen::create([
            'komponen'=>'mouse'
        ]);
        Componen::create([
            'komponen'=>'keyboard'
        ]);
        Componen::create([
            'komponen'=>'monitor'
        ]);
        Componen::create([
            'komponen'=>'nct'
        ]);
        Componen::create([
            'komponen'=>'printer'
        ]);
        Componen::create([
            'komponen'=>'windows'
        ]);
        Componen::create([
            'komponen'=>'aplikasi'
        ]);
        Componen::create([
            'komponen'=>'email'
        ]);
    }
}
