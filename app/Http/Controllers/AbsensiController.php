<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsensiController extends Controller
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
        $absensi = Absensi::with('siswa')->get();
        $siswa = Siswa::with('kelas')->get();
        $kelas = Kelas::with('jurusan')->get();
        
        return view('absensi.index', ['absensi' => $absensi, 'siswa' => $siswa, 'kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('absensi.create', compact('siswa', 'kelas', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_siswa' => 'required',
            'id_siswa' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'jam_masuk' => 'required',
            'status' => 'required'
        ]);

        $absensi = new Absensi();
        $absensi->id_siswa = $request->id_siswa;
        $absensi->id_siswa = $request->id_siswa;
        $absensi->kelas = $request->kelas;
        $absensi->id_jurusan = $request->id_jurusan;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->status = $request->status;
        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('absensi.edit', compact('absensi', 'siswa', 'kelas', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_siswa' => 'required',
            'id_siswa' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'jam_masuk' => 'required'
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->id_siswa = $request->id_siswa;
        $absensi->id_siswa = $request->id_siswa;
        $absensi->kelas = $request->kelas;
        $absensi->id_jurusan = $request->id_jurusan;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
