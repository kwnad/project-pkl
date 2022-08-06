<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;

class SiswaController extends Controller
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
        $siswa = Siswa::with('jurusan')->get();
        // dd($siswa);
        // return $siswa;
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('siswa.create', compact('jurusan'));
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
            'nis' => 'required|unique:siswas',
            'nama' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        
        // $user = new User();
        // $user->name = $request->nama;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->id_role = 2;
        // $user->save();

        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->email = $request->email;
        $siswa->password = $request->password;
        $siswa->save();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $jurusan = Jurusan::all();
        return view('siswa.edit', compact('siswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:kelas',
            'nama' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->save();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dibuat!');
    }
}
