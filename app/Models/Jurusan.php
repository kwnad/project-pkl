<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    public $fillable = ['jurusan'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_kelas');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_siswa');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_absensi');
    }
}
