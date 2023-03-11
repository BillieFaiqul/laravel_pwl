<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data_keluargas')->insert([
            [
                'id' => 1,
                'nama' => 'Suhaimi Awali',
                'jenis_kelamin'=>'Laki-Laki',
                'tanggal_lahir'=>'1971-01-28',
                'agama'=>'Islam',
                'pekerjaan'=>'Wiraswasta',
                'status'=>'Kepala Keluarga'
            ],
            [
                'id' => 2,
                'nama' => 'Aminatus Zuhria',
                'jenis_kelamin'=>'Perempuan',
                'tanggal_lahir'=>'1978-04-17',
                'agama'=>'Islam',
                'pekerjaan'=>'Ibu Rumah Tangga',
                'status'=>'Istri'            ],
            [
                'id' => 3,
                'nama' => 'Qonita Atya Aghna',
                'jenis_kelamin'=>'Perempuan',
                'tanggal_lahir'=>'2014-06-27',
                'agama'=>'Islam',
                'pekerjaan'=>'Belum Bekerja',
                'status'=>'Anak'
            ]
        ]);
    }
}
