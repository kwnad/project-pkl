@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Kelas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Pilih Data Jurusan</label>
                                <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror"
                                    id="">
                                    @foreach ($jurusan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                                    @endforeach
                                </select>
                                @error('id_jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" class="form-control  @error('kelas') is-invalid @enderror"
                                    name="kelas">
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection