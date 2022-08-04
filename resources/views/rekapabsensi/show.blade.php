@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .col-md-10{
    
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card elevation-5 shadow p-2" style="background-color:rgb(221, 221, 221)) ;">
                <div class="card-header pb-3" style="background-color: rgb(143, 188, 240)">Detail Absensi
                </div>
                <div class="card-body bg-light shadow p-4">
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                        <br>
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Terlambat</th>
                            </thead>
                            <tbody>
                                {{-- @php $no = 1; @endphp
                                @foreach ($absensi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->siswa->nis }}</td>
                                        <td>{{ $data->siswa->nama }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->jurusan->jurusan }}</td>
                                        <td>{{ $data->jam_masuk }}</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('rekapabsensi.index') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection