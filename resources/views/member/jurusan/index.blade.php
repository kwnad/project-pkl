@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .col-md-7{

        font-family:Georgia, 'Times New Roman', Times, serif;
    }
</style>
<body >
    

    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-7">
                @include('layouts/_flash')
                <div class="card elevation-5 shadow p-2 " style="background-color:rgb(221, 221, 221)) ;">
                    
                    <div class="card-header pb-3 " style="background-color: rgb(143, 188, 240)">
                        Data Jurusan 
                    </div>

                    <div class="card-body bg-light " >
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($jurusan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->jurusan }}</td>
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
@endsection
</body>
</html>