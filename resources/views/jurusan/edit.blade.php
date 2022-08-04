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
<body>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header " style="background-color:  rgb(143, 188, 240);">
                        Edit Data Jurusan
                    </div>
                    <div class="card-body bg-light shadow p-4">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control  @error('jurusan') is-invalid @enderror"
                                    name="jurusan" value="{{ $jurusan->jurusan }}">
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-info" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection