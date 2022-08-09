<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jurusan;
use App\Models\Siswa;
use App\Models\AbsenSiswa;
use App\Models\User;
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
        $absensi = AbsenSiswa::all();
        $siswa = Siswa::all();
        $jurusan = Jurusan::all();
        $user = User::all();
        // $absensi = Absensi::with('siswa')->get();
        // $siswa = Absensi::with('absensiswa')->get();
        // $siswa = Siswa::with('jurusan')->get();
        
        return view('absensi.index', compact('absensi', 'siswa', 'jurusan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $jurusan = Jurusan::all();
        return view('absensi.create', compact('siswa', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            // 'id_siswa' => 'required',
            // 'user_id' => 'required',
            // 'kelas' => 'required',
            // 'id_jurusan' => 'required',
            // 'id_absensiswa' => 'required',
            'status' => 'required'
        ]);
        
        $absensi = new Absensi();
        // $absensi->id_siswa = $request->id_siswa;
        $absensi->user_id = $request->user_id;
        // $absensi->kelas = $request->kelas;
        // $absensi->id_jurusan = $request->id_jurusan;
        // $absensi->id_absensiswa = $request->id_absensiswa;
        $absensi->status = $request->status;
        $absensi->save();
        return redirect()->route('absensi.index')
            ->with('success', 'Data berhasil dikirim!');

        // $absensis = Absensi::where ([
        //     ['user_id', '=', $absensi->user_id],
        //     ['status', '=', $absensi->status]
        // ])->first();

        // if ($absensis) {
        //     return redirect()->route('absensi')
        //     ->with('error', 'Data status sudah ada!');
        // } else {
        //     AbsenSiswa::create([
        //         'user_id' => $absensi->user_id,
        //         'status' => $absensi->status,
        //     ]);
        // }

        // if($request->user_id)
        // {
        //     foreach ($request->user_id as $score) 
        //     {
        //         if( ! empty($score))
        //         {
        //             $data = [
                        
        //                 'user_id' => $score,
        //                 'status'=>$request->status,
        //             ];
        //             Absensi::create($data);
        //         }
        //         $a++;
        //     }

        //     return redirect()->route('absensi.index')
        //     ->with('success', 'Data berhasil dikirim!');
        // }

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
        $jurusan = Jurusan::all();
        return view('absensi.edit', compact('absensi', 'siswa', 'jurusan'));
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
            'jam_masuk' => 'required',
            'status' => 'required'
        ]);

        $absensi = Absensi::findOrFail($id);
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
