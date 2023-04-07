<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $table = 'data_keluargas';

    protected $fillable =[
        'id',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'pekerjaan',
        'status'
    ];
}
