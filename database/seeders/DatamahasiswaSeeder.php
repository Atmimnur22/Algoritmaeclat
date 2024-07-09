<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatamahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datamahasiswa')->insert([
            [
                'name' => 'Atmim Nurona',
                'prodi' => 'Informatika',
                'jenis_kelamin' => 'Perempuan',
                'tajwid' => 40,
                'fashohah' => 40,
                'adab' => 20,
                'total' => 100,
            ],
            [
                'name' => 'Nadiyah Saidah',
                'prodi' => 'Informatika',
                'jenis_kelamin' => 'Perempuan',
                'tajwid' => 35,
                'fashohah' => 30,
                'adab' => 20,
                'total' => 85,
            ]
        ]);
    }
}
