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
                    <a href="{{ url('dataproses/search') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-search"></i> Search
                    </a>
                    </div>
            </div>
            <div class="form-group">
                <div class="content mt-3">
                        <form action="datamahasiswa" method="GET">
                            <label></label>
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


 {{-- <div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Mahasiswa</strong>
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
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datapencarian as $data => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tajwid }}</td>
                                <td>{{ $item->fashohah }}</td>
                                <td>{{ $item->adab }}</td>
                                <td>{{ $item->total }}</td> 
                            </tr> 
                        @empty --}}
                            {{-- <tr>
                                <td colspan="8" class="text-center">Data tidak ditemukan</td>
                            </tr> --}}
                        {{-- @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>   --}}
@endsection
