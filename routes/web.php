<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\RekapAbsensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AbsenSiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-admin', function () {
    return view('layouts.admin');
});

Route::resource('jurusan', JurusanController::class);

Route::resource('kelas', KelasController::class);

Route::resource('siswa', SiswaController::class);

Route::resource('absensi', AbsensiController::class);

Route::get('/test-mimin', function () {
    return view('layouts.mimin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('jurusan', JurusanController::class);

    Route::resource('kelas', KelasController::class);

    Route::resource('siswa', SiswaController::class);

    Route::resource('absensi', AbsensiController::class);

    Route::resource('rekapabsensi', RekapAbsensiController::class);

    // Route::resource('detail', AdminController::class);

    // Route::get('rekap', function () {
    //     return view('rekapabsensi.index');
    // });
});

Route::group(['prefix' => 'member', 'middleware' => ['auth', 'role:member']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('profil', function () {
        return view('profil.index');
    });

    Route::get('rekap', function () {
        return view('rekapuser.index');
    });

    Route::get('absensiswa', [AbsenSiswaController::class, 'index'])->name('absensiswa');
    Route::post('absenmasuk', [AbsenSiswaController::class, 'store'])->name('absenmasuk');

    // Route::post('/absensiswa', function () {
    //     ('AbsenSiswaController@absen');
    // });

    // Route::post('/absensiswa', 'AbsenSiswaController@absen');
});

Route::get('/testt', function () {
    return view('layouts.admin2');
});

Route::get('/adm', function () {
    return view('layouts.adm');
});