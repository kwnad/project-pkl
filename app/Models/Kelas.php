<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['kelas'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_siswa');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_absensi');
    }

    public function detailabsensi()
    {
        return $this->hasMany(DetailAbsensi::class, 'id_detailabsensi');
    }
}
