<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data_mata_kulias')->insert([
            [
                'id' => 1,
                'nama_matakuliah' => 'Kewarganegaraan',
                'hari'=>'Rabu'
            ],
            [
                'id' => 2,
                'nama_matakuliah' => 'Proyek 1',
                'hari'=>'Senin'
            ],
            [
                'id' => 3,
                'nama_matakuliah' => 'Management Proyek',
                'hari'=>'Selasa'
            ]
        ]);
    }
}
