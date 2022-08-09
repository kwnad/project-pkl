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
    <div class="card text-sm-center" style="margin-left: 59rem; margin-right:6rem;">
        <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-outline-success" style="float: right">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 19 17">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
              </svg> Data
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card elevation-5 shadow p-2" style="background-color:rgb(221, 221, 221)) ;">
                <div class="card-header pb-3" style="background-color: rgb(143, 188, 240)">Data Siswa
                </div>
                <div class="card-body bg-light shadow p-4">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->jurusan->jurusan }}</td>
                                        <td>{{ $data->user->email }}</td>
                                        {{-- <td>{{ $data->password }}</td> --}}
                                        <td>
                                            <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                                @csrf
                                                
                                                <a href="{{ route('siswa.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 1.5 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                      </svg>
                                                </a>
                                               
                                                
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
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