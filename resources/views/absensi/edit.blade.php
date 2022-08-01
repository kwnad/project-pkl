@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color:  rgb(143, 188, 240);">
                        Data Absensi
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('absensi.update', $absensi->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $absensi->id_siswa ? 'selected' : '' }}>
                                            {{ $data->nis }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $absensi->id_siswa ? 'selected' : '' }}>
                                            {{ $data->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Jurusan</label>
                                <select name="id_jurusan" class="form-control @error('id_jurusan') is-invalid @enderror"
                                    readonly>
                                    @foreach ($jurusan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $absensi->id_jurusan ? 'selected' : '' }}>
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
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="text" class="form-control  @error('jam_masuk') is-invalid @enderror"
                                    name="jam_masuk" value="{{ $absensi->jam_masuk }}">
                                @error('jam_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status" value="{{ $absensi->status }}">
                                @error('status')
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