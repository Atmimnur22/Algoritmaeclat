<?php

namespace App\Imports;

use App\Models\Datamahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Datamahasiswa([
            'name' => $row['name'],
            'prodi' => $row['prodi'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'tajwid' => $row['tajwid'],
            'fashohah' => $row['fashohah'],
            'adab' => $row['adab'],
        ]);
    }
}
