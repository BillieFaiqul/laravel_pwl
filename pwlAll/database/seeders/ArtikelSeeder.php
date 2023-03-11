<?php

namespace Database\Seeders;
use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artikels')->insert([
            [
                'id' => 1,
                'judul' => 'Menegangkan!',
                'penulis' => 'Haikal',
                'tanggal_publish' => '2023-01-07'
            ],
            [
                'id' => 2,
                'judul' => 'Mengejutkan!',
                'penulis' => 'Diouf',
                'tanggal_publish' => '2023-02-07'
            ],
            [
                'id' => 3,
                'judul' => 'Mengerikan!',
                'penulis' => 'Haikal',
                'tanggal_publish' => '2023-03-07'
            ]
        ]);
    }
}
