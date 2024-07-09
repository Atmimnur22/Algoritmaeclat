<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapencarian extends Model
{   
    use HasFactory;

    protected $fillable = [
        'datamahasiswa_id',
        'name',
        'prodi',
        'jenis_kelamin',
        'tajwid',
        'fashohah',
        'adab',
        'total',
        'status'
    ];
}