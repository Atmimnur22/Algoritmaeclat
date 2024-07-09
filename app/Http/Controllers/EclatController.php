<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EclatController extends Controller
{
    public function index()
    {
        $datamahasiswa = DB::table('datamahasiswa')->get();
        return view('dataproses.index')->with('datamahasiswa', $datamahasiswa);
    }

    public function search(Request $request)
    {

        $searchTerm = $request->input('search');
        
        $datapencarian = DB::table('datamahasiswa')
                            ->where('name', 'like', '%' . $searchTerm . '%')
                            ->orWhere('prodi', 'like', '%' . $searchTerm . '%')
                            ->get();
        // $query = DB::table('datamahasiswa');
        
        // if ($request->has('search')) {
        //     $searchTerm = $request->input('search');
        //     $query->where('name', 'like', '%' . $searchTerm . '%')
        //           ->orWhere('prodi', 'like', '%' . $searchTerm . '%')
        //           ->get();
        // }


        
        //$datapencarian = $query->get();
        
        //dd($datapencarian);

        //return view('dataproses.search', compact('datapencarian'));
        return view('dataproses.search', ['datapencarian' => $datapencarian]);
    }

    public function process()
    {
        return view('dataproses.result');
    }

    public function addprocess(Request $request)
    {
        $min_support = $request->input('min_support');
        $min_confidence = $request->input('min_confidence');
        $datamahasiswa_id = $request->input('datamahasiswa_id'); 

        $datamahasiswa = DB::table('datamahasiswa')->find($datamahasiswa_id);

        if (!$datamahasiswa) {
        return redirect()->back()->with('error', 'Data mahasiswa tidak ditemukan.');
    }

        DB::table('eclats')->insert([
            'datamahasiswa_id' => $datamahasiswa_id,
            'min_support' => $min_support,
            'min_confidence' => $min_confidence,
        ]);

        $results = [
            'min_support' => $min_support,
            'min_confidence' => $min_confidence,
        ];

        return view('dataproses.result', compact('results'));
    }
}
