<?php

namespace App\Http\Controllers;

use App\Models\DetailAbsensi;
use Illuminate\Http\Request;

class DetailAbsensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        $kelas = Kelas::with('jurusan')->get();
        // dd($siswa);
        // return $siswa;
        return view('siswa.index', ['siswa' => $siswa, 'kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailAbsensi  $detailAbsensi
     * @return \Illuminate\Http\Response
     */
    public function show(DetailAbsensi $detailAbsensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailAbsensi  $detailAbsensi
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailAbsensi $detailAbsensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailAbsensi  $detailAbsensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailAbsensi $detailAbsensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailAbsensi  $detailAbsensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailAbsensi $detailAbsensi)
    {
        //
    }
}
