<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatahasilController extends Controller
{
    
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function hasil()
    {
        return view('datahasil/hasil');
    }
}

