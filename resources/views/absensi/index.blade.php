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

        .col-md-12{
    
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card elevation-5 shadow p-2" style="background-color:rgb(221, 221, 221)) ;">
                <div class="card-header pb-3" style="background-color: rgb(143, 188, 240)">
                    Data Absensi
                </div>
                <div class="card-body bg-light shadow p-4">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <form action="{{ route('absensi.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                            <thead>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($absensi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->user->siswa->nis }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->user->siswa->kelas }}</td>
                                    <td>{{ $data->user->siswa->jurusan->jurusan }}</td>
                                    <td>{{ $data->date }}</td>
                                    <td>{{ $data->time_in }}</td>
                                    <td>{{ $data->time_out }}</td>
                                    <td>
                                        <input type="hidden" value="{{ $data->user->id }}" name="user_id">
                                                <div class="mb-3">
                                                    <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                                        name="status" value="Hadir">H
                                                    <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                                        name="status" value="Izin">I
                                                    <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                                        name="status" value="Sakit">S
                                                    <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                                        name="status" value="Alpha">A
                                                    <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                                        name="status" value="Terlambat">T
                                                    @error('status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                            {{-- </form> --}}
                                            </td>
                                            
                                            
                                </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <div class="mb-3">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-info" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection