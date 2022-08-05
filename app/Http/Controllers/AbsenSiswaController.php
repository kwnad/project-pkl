<?php

namespace App\Http\Controllers;

use App\Models\AbsenSiswa;
use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;

class AbsenSiswaController extends Controller
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
        return view('home');
    }

    // public function absen(Request $request)
    // {
    //     $user_id = Auth::user()->id;
    //     $date = date("Y-m-d");
    //     $time = date("H:i:s");
        
    //     $absen = new Absen;
    //     if (isset($request->btnIn)) {
    //         $absen->create([
    //             'user_id' => $user_id,
    //             'date' => $date,
    //             'time_in' => $time
    //         ]);
    //         return "absen masuk";
    //     } else if (isset($request->btnOut)) {
            
    //     }
    //     return $request->all();
    // }

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
        $timezone = "Asia/Jakarta";
        $datetime = new DateTime('now', new DateTimeZone($timezone));
        $date = $datetime->format("Y-m-d");
        $localtime = $datetime->format("H:i:s");

        $absensiswa = AbsenSiswa::where ([
            ['user_id', '=', auth()->user()->id],
            ['date', '=', $date],
        ])->first();

        if ($absensiswa) {
            return "Sudah Ada";
        } else {
            AbsenSiswa::create([
                'user_id' => auth()->user()->id,
                'date' => $date,
                'time_in' => $localtime
            ]);
        }
        return redirect('absensiswa');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(AbsenSiswa $absenSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(AbsenSiswa $absenSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbsenSiswa $absenSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsenSiswa $absenSiswa)
    {
        //
    }
}
