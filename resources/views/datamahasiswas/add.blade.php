@extends('main')

@section('title', 'Add Data Mahasiswa')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Data Nilai Mahasiswa</strong>  
                </div>
                <div class="pull-right">
                    <a href="{{ url('datamahasiswa') }}" class="btn btn-success btn.sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datamahasiswa') }}" method="post">
                            @csrf 
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <textarea name="prodi" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tajwid</label>
                                <input type="number" name="tajwid" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Fashohah</label>
                                <input type="number" name="fashohah" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Adab</label>
                                <input type="number" name="adab" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="number" name="total" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            
            </div>
        
        </div>
        
    </div>
</div>

@endsection
