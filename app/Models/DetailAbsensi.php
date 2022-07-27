<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAbsensi extends Model
{
    use HasFactory;
    public $fillable = ['id_absensi', 'status'];
    public $timestamps = true;

    public function absensi()
    {
        return $this->belongsTo(Absensi::class, 'id_absensi');
    }
}
