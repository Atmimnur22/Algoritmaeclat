@extends('main')

@section('title', 'Data Mahasiswa')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Nilai Mahasiswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datamahasiswa/add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <a href="{{ url('datamahasiswa/upload') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Upload
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Jenis Kelamin</th>
                            <th>Tajwid</th>
                            <th>Fashohah</th>
                            <th>Adab</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datamahasiswa as $data => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tajwid }}</td>
                                <td>{{ $item->fashohah }}</td>
                                <td>{{ $item->adab }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <!-- Tambahkan aksi edit dan delete di sini -->
                                    <a href="{{ url('datamahasiswa/edit/'.$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ url('datamahasiswa/'.$item->id) }}" method="post" style="display:inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
