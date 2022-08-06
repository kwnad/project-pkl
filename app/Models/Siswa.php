<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nis', 'kelas', 'id_jurusan', 'user_id'];
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
