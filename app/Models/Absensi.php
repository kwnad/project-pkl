<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    public $fillable = ['nis', 'name', 'kelas', 'id_jurusan', 'date', 'time_in', 'time_out', 'status'];
    public $timestamps = true;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function absensiswa()
    {
        return $this->belongsTo(AbsenSiswa::class, 'id_absensiswa');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
