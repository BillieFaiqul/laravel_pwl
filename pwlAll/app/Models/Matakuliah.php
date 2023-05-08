<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $guarded = 'id';

    public function mahasiswa(){
        return $this->hasMany(MahasiswaMatakuliah::class, 'matakuliah_id', 'id');
    }
}
