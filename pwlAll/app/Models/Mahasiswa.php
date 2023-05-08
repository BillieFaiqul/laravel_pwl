<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'nama', 'tanggal_lahir', 'tempat_lahir', 'alamat', 'hp', 'jk'];
    protected $guarded = ['id'];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah(){
        return $this->hasMany(MahasiswaMatakuliah::class, 'mahasiswa_id', 'id');
    }
}