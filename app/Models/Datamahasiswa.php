<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamahasiswa extends Model
{   
    use HasFactory;

    // protected $table = 'datamahasiswa'; // Sesuaikan dengan nama tabel Anda

    // protected $table = 'datamahasiswa';

    protected $fillable = [
        'name', 
        'prodi', 
        'jenis_kelamin', 
        'tajwid', 
        'fashohah', 
        'adab', 
        'total'
    ];
}
