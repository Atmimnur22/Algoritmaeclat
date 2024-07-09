@extends('main')

@section('title', 'Data Proses')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Proses</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-2">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Langkah 1: Cari Data Mahasiswa</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('dataproses.search') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-search"></i> Search
                    </a>
                </div>
            </div>
            <div class="form-group">
                <div class="content mt-3">
                    <form action="{{ route('dataproses.search') }}" method="GET">
                        <label>Search</label>
                        <input type="text" name="search" class="form-control" autofocus required>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">   
                    <strong>Langkah 2:Input Nilai Support dan Confidence</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('dataproses.result') }}" method="POST">
                        @csrf
                         <div class="pull-right">
                            <a href="{{ url('dataproses/result') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-submit"></i> Submit
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group">
                <div class="content mt-2">
                    <label>Nilai Support</label>
                    <input type="number" name="nilai support" class="form-control" id="min_support" autofocus required>
                </div>
                <div class="content mt-2">
                    <label>Nilai Confidence</label>
                    <input type="number" name="nilai confidence" class="form-control" id="min_confidence"autofocus required>
                </div>
        
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        @isset($datapencarian)
            @if ($datapencarian->isEmpty())
                <div class="alert alert-warning">
                    Data tidak ditemukan
                </div>
            @else
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapencarian as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->prodi }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tajwid }}</td>
                                <td>{{ $data->fashohah }}</td>
                                <td>{{ $data->adab }}</td>
                                <td>{{ $data->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @else
            <div class="alert alert-info">
                Masukkan kata kunci pencarian di atas.
            </div>
        @endisset
    </div>
</div>



@endsection
