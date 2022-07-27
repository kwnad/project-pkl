<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    public $fillable = ['id_siswa', 'jam_masuk'];
    public $timestamps = true;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
