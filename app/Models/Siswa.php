<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $fillable = ['nis', 'nama', 'id_kelas'];
    public $timestamps = true;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_absensi');
    }
}
