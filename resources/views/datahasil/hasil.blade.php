@extends('main')

@section('title', 'Data Hasil')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Hasil</h1>
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
{{-- <div class="content mt-2">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Daftar Data Hasil</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dataproses/search') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-search"></i> Search
                    </a>
                    </div>
            </div>
            <div class="form-group">
                <div class="content mt-3">
                    {{-- <div class="animated fadeIn"> --}}
                        {{-- <label></label>
                        <input type="text" name="name" class="form-control" autofocus required> --}}
                    {{-- </div>
                </div>
            </div>
            
        </div>
    </div> --}}
{{-- </div> --}} 

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
                    <strong>Daftar Data Hasil</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dataproses/search') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-search"></i> Search
                    </a>
                    <a href="{{ url('') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i> Print
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($datamahasiswa as $data => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tajwid }}</td>
                                <td>{{ $item->fashohah }}</td>
                                <td>{{ $item->adab }}</td>
                                <td>
                                    
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
                    <strong>Rule Hasil</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i> Print
                    </a>
                    </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Hasil Rule</th>
                        </tr>
                    </thead>
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection
