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
                    <div class="card-body bg-light shadow p-4">
                        <form action="{{ route('absensi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Masukkan NIS</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    id="">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nis }}</option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Masukkan Nama</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    id="">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
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
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control  @error('jam_masuk') is-invalid @enderror"
                                    name="jam_masuk">
                                @error('jam_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <br>
                                <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                    name="status" value="Hadir">Hadir
                                    <br>
                                <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                    name="status" value="Izin">Izin
                                    <br>
                                <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                    name="status" value="Sakit">Sakit
                                    <br>
                                <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                    name="status" value="Alpha">Alpha
                                    <br>
                                <input type="radio" class="mr-2"  @error('status') is-invalid @enderror"
                                    name="status" value="Terlambat">Terlambat
                                    <br>
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