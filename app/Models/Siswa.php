<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nis', 'nama', 'kelas', 'id_jurusan'];
    public $timestamps = true;


    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_absensi');
    }

    public function rekapabsensi()
    {
        return $this->hasMany(RekapAbsensi::class, 'id_rekapabsensi');
    }
}
