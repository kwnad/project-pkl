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
                <div class="card-header pb-3" style="background-color: rgb(143, 188, 240)">Rekap Absensi
                </div>
                <div class="card-body bg-light shadow p-4">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <div class="row">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="col-md-4">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Jurusan</label>
                                    <select name="jurusan" id="id_jurusan" class="form-control">
                                        <option value="">Pilih Jurusan</option>
                                        @foreach ($jurusan as $jurusan)
                                        {{-- @if ($id_jurusan == $jurusan->id_jurusan) --}}
                                        <option value="{{$jurusan->id_jurusan}}" selected>{{$jurusan->jurusan}}</option>    
                                        {{-- @else
                                        <option value="{{$jurusan->id_jurusan}}">{{$jurusan->jurusan}}</option>
                                        @endif --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info" type="submit" name="simpan">Kirim</button>
                                </div>
                            </div>
                            </form>
                            <br>
                            <thead>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Hadir</th>
                                <th>Sakit</th>
                                <th>Izin</th>
                                <th>Alpha</th>
                                <th>Terlambat</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->user->siswa->nis }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->hadir }}</td>
                                        <td>{{ $data->sakit }}</td>
                                        <td>{{ $data->izin }}</td>
                                        <td>{{ $data->alpha }}</td>
                                        <td>{{ $data->terlambat }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if(isset($_POST['simpan'])) {
                        $kelas = $_POST['kelas'];
                        $jurusan = $_POST['jurusan'];
                    ?>
                        <thead>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Hadir</th>
                            <th>Sakit</th>
                            <th>Izin</th>
                            <th>Alpha</th>
                            <th>Terlambat</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($siswa as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->user->siswa->nis }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->hadir }}</td>
                                    <td>{{ $data->sakit }}</td>
                                    <td>{{ $data->izin }}</td>
                                    <td>{{ $data->alpha }}</td>
                                    <td>{{ $data->terlambat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection