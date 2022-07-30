@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header " style="background-color:  rgb(143, 188, 240);">
                        Data Kelas
                    </div>
                    <div class="card-body bg-light shadow p-4">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Pilih Jurusan</label>
                                <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror"
                                    readonly>
                                    @foreach ($jurusan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kelas->id_jurusan ? 'selected' : '' }}>
                                            {{ $data->jurusan }}
                                        </option>
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
                                    name="kelas" value="{{ $kelas->kelas }}">
                                @error('kelas')
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
@endsection