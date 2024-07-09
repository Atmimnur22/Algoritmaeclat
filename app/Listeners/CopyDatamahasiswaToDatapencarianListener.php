<?php

namespace App\Listeners;

use App\Events\CopyDatamahasiswaToDatapencarian;
use App\Models\Datapencarian;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CopyDatamahasiswaToDatapencarianListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CopyDatamahasiswaToDatapencarian  $event
     * @return void
     */
    public function handle(CopyDatamahasiswaToDatapencarian $event)
    {
        $datamahasiswa = $event->datamahasiswa;

        // Masukkan data datamahasiswa ke datapencarian
        Datapencarian::updateOrCreate(
            ['datamahasiswa_id' => $datamahasiswa->id],
            [
                'name' => $datamahasiswa->name,
                'prodi' => $datamahasiswa->prodi,
                'jenis_kelamin' => $datamahasiswa->jenis_kelamin,
                'tajwid'=> $datamahasiswa->tajwid,
                'fashohah'=> $datamahasiswa->fashohah,
                'adab'=> $datamahasiswa->adab,
                'total'=> $datamahasiswa->total,
                // Sesuaikan dengan field lain yang perlu dimasukkan
 ]);
    }
}
