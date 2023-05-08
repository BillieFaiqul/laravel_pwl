<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $matkul = [
            [
                'nama_matkul' => 'Pemograman Berbasi Objek',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Pemograman Web Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Basis Data Lanjut',
                'sks' => 3,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Praktikuk Basis Dat Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
        ];

        DB::table('matakuliah')->insert($matkul);
    }
}
