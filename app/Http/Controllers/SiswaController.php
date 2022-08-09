<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Role;
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
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $user = User::all();
        return view('siswa.create', compact('jurusan', 'user'));
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
            'nis' => 'required|unique:siswas',
            'name' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            
        ]);

        $memberRole = Role::create([
            'name' => 'member',
            // 'display_name' => 'Project Member', // optional

        ]);

        $userSiswa = new User();
        $userSiswa->name = $request->name;
        $userSiswa->email = $request->email;
        $userSiswa->password = bcrypt($request->password);
        $userSiswa->save();
        $userSiswa->attachRole($memberRole);


        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->user_id = $userSiswa->id;
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
        $user = User::all();
        return view('siswa.edit', compact('siswa', 'jurusan', 'user'));
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
            'nis' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $userSiswa = Siswa::findOrFail($id);
        $userSiswa->name = $request->name;
        $userSiswa->email = $request->email;
        $userSiswa->password = bcrypt($request->password);
        $userSiswa->save();

        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->user_id = $userSiswa->id;
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
