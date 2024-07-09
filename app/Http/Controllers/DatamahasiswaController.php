<?php

namespace App\Http\Controllers;


use App\Events\CopyDatamahasiswaToDatapencarian;
use App\Http\Controllers\MahasiswaImport as ControllersMahasiswaImport;
use App\Imports\MahasiswaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Datamahasiswa;
use App\Models\Caridata;

class DatamahasiswaController extends Controller
{
    
    public function data()
    {
        $datamahasiswa = DB::table('datamahasiswa')->get();
        return view('datamahasiswas.data')->with('datamahasiswa', $datamahasiswa);
    }

        //$datamahasiswa = DB::table('datamahasiswa')->get();

        //return $datamahasiswa;
        //dd($datamahasiswa);
        //return view('datamahasiswas.data', ['datamahasiswa' => $datamahasiswa]);
    
    public function add()
    {
        return view('datamahasiswas.add');
    }
        
    public function addProcess(Request $request)
    {
        $datamahasiswa = DB::table('datamahasiswa')->get();
        //return $request;
        DB::table('datamahasiswa')->insert([
            'id' => $request->id,
            'name' => $request->name,
            'prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tajwid' => $request->tajwid,
            'fashohah' => $request->fashohah,
            'adab' => $request->adab,
            'total' => $request->total,
        ]);
        return redirect('datamahasiswa')->with('status', 'Tambah Data Berhasil!');
    
    }
    
    public function edit($id)
    {
        $datamahasiswa = DB::table('datamahasiswa')->where('id', $id)->first();
        return view('datamahasiswas/edit', compact('datamahasiswa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('datamahasiswa')->where('id', $id)->update([
            'name' => $request->name,
            'prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tajwid' => $request->tajwid,
            'fashohah' => $request->fashohah,
            'adab' => $request->adab,
            'total' => $request->total,
        ]);
        return redirect('datamahasiswa')->with('status', 'Update Data Berhasil!');
    }

    public function destroy($id)
    {
        DB::table('datamahasiswa')->where('id', $id)->delete();
        return redirect('datamahasiswa')->with('status', 'Data berhasil dihapus!');
        //return('delete');
    }

    public function showUploadForm()
    {
        return view('datamahasiswas.upload');
    }

    public function processUpload(Request $request)
    {
        
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,txt|max:2048',
        ]);
    
        Excel::import(new MahasiswaImport, $request->file('file')->store('temp'));

        if ($request->file('file')->isValid()) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName);

            // Proses pengolahan file bisa dilakukan di sini
            // Misalnya membaca file CSV dan menyimpannya ke database

            return redirect()->route('datamahasiswas.upload')->with('status', 'File berhasil diunggah.');
        }
        

        return redirect()->route('datamahasiswas.upload')->with('error', 'File gagal diunggah.');
    }
    public function import()
    {
        Excel::import(new MahasiswaImport);
    }
    public function store(Request $request)
      {
          // Validasi data yang diterima
        $request->validate([
        'name' => 'required|string|max:255',
        'prodi' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|max:10',
        'tajwid' => 'required|integer',
        'fashohah' => 'required|integer',
        'adab' => 'required|integer',
        'total' => 'required|integer',
        // Sesuaikan dengan validasi lainnya
    ]);    


       // Proses validasi dan penyimpanan datamahasiswa
       $datamahasiswa = Datamahasiswa::create([
        'name' => $request->name,
        'prodi' => $request->prodi,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tajwid'=> $request->tajwid,
        'fashohah'=> $request->fashohah,
        'adab'=> $request->adab,
        'total'=> $request->total,
        // Sesuaikan dengan field lain yang perlu disimpan
    ]);

    // Panggil event untuk menyalin data ke datapencarian
    event(new CopyDatamahasiswaToDatapencarian($datamahasiswa));

    // Kembalikan response atau redirect ke halaman lain
    // Redirect atau kembali ke halaman yang sesuai
    return redirect()->route('datamahasiswa.index')
    ->with('success', 'Data Mahasiswa berhasil disimpan.');
}
}



