<?php

namespace App\Http\Controllers;

use App\Models\RekapAbsensi;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Absensi;
use Illuminate\Http\Request;

class RekapAbsensiController extends Controller
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
    public function index(Request $request)
    {
        // $data['q'] = $request->query['q'];
        // $query = Siswa::select()
        //         ->where('siswa.kelas', 'like', '%' . $data['q'] . '%')
        //         ->orWhere('siswa.jurusan', 'like', '%' . $data['q'] . '%');
        $siswa = Siswa::all();
        $jurusan = Jurusan::all();
        $user = User::all();
        $absensi = Absensi::all();
        $rekapAbsensi = RekapAbsensi::all();
        // $rekap = Siswa::select()
        dd($rekapAbsensi);
        // $rekapAbsensi = Siswa::with('siswa')->get();
        // $datasiswa = Siswa::with('siswa')->get();
        // dd($rekapAbsensi);
        return view('rekapabsensi.index', compact('rekapAbsensi', 'jurusan', 'siswa', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('rekapabsensi.create', compact('siswa'));
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
            
            'status' => 'required'
        ]);
        
        $absensi = Absensi::where ([
            ['user_id', '=', 'user_id'],
            ['status', '=', 'status'],
        ])->first();

        if ($absensi) {
            return redirect()->route('absensi')
            ->with('error', 'Data sudah ada!');
        }
        // $absensi->user_id = $request->user_id;
        // $absensi->status = $request->status;
        // $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dikirim!');

        // $hadir = User::where('status', 'Hadir');
        // $hadir = $hadir->count();
        
        // $sakit = User::where('status', 'Sakit');
        // $sakit = $sakit->count();

        // $izin = User::where('status', 'Izin');
        // $izin = $izin->count();

        // $alpha = User::where('status', 'Alpha');
        // $alpha = $alpha->count();

        // $terlambat = User::where('status', 'Terlambat');
        // $terlambat = $terlambat->count();

        // return view('rekapabsensi.index', compact('hadir', 'sakit', 'izin', 'alpha', 'terlambat'));

        // $rekapAbsensi = new RekapAbsensi();
        // $rekapAbsensi->id_siswa = $request->id_siswa;
        // $rekapAbsensi->save();
        // return redirect()->route('rekapbsensi.index')
        //     ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RekapAbsensi  $rekapAbsensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rekapAbsensi = RekapAbsensi::all();
        // $rekapAbsensi = RekapAbsensi::findOrFail($id);
        return view('rekapabsensi.show', compact('rekapAbsensi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekapAbsensi  $rekapAbsensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekapAbsensi = RekapAbsensi::findOrFail($id);
        $siswa = Siswa::all();
        return view('rekapabsensi.edit', compact('rekapAbsensi', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekapAbsensi  $rekapAbsensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_siswa' => 'required',
        ]);

        $rekapAbsensi = RekapAbsensi::findOrFail($id);
        $rekapAbsensi->id_siswa = $request->id_siswa;
        $rekapAbsensi->save();
        return redirect()->route('rekapabsensi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekapAbsensi  $rekapAbsensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekapAbsensi = RekapAbsensi::findOrFail($id);
        $rekapAbsensi->delete();
        return redirect()->route('rekapabsensi.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
