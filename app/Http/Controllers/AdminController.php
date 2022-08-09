<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function total()
    {
        $hadir = User::where('status', 'Hadir');
        $hadir = $hadir->count();
        
        $sakit = User::where('status', 'Sakit');
        $sakit = $sakit->count();

        $izin = User::where('status', 'Izin');
        $izin = $izin->count();

        $alpha = User::where('status', 'Alpha');
        $alpha = $alpha->count();

        $terlambat = User::where('status', 'Terlambat');
        $terlambat = $terlambat->count();

        $total_hadir = DB::table('rekap_absensi')
                ->sum('status');
                
        return view('rekapabsensi.index', compact('hadir', 'sakit', 'izin', 'alpha', 'terlambat'));
    }
}
