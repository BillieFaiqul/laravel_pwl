<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMatakuliah extends Model
{
    use HasFactory;

    protected $table = 'data_mata_kulias';
    // protected $primaryKey='id';
    //protected $keyType = 'int';
    protected $fillable = [
        'id',
        'nama_matakuliah',
        'hari'
    ];
}
