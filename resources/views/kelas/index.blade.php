@extends('layouts.admin')
@section('content')


    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-dark">Data Kelas
                    <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body bg-light shadow p-4">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kelas as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->jurusan->jurusan }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>
                                            <form action="{{ route('kelas.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kelas.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('kelas.show', $data->id) }}"
                                                    class="btn btn-sm btn-outline-warning">
                                                    Show
                                                </a> |
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                </button>
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
@endsection