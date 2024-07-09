<!-- resources/views/datamahasiswas/upload.blade.php -->

@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="content mt-3">
   <div class="animated fadeIn">
       <div class="card">
           <div class="card-header">
               <div class="pull-left">
                   <strong>Data Mahasiswa Alma Ata Tidak Lulus LPBA</strong>
               </div>
               <div class="card-body table-responsive">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Angkatan</th>
                              <th>Tidak Lulus</th>
                              <th>Jumlah Mahasiswa</th>
                              <th>Persentase</th>
                           </tr>
                      </thead>
                  </table>
               </div>

           </div>
       </div>
   </div>
</div>
@endsection
