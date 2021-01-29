<?php

namespace App\Exports;

use App\Entrevista3;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class Entrevista3Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entrevista3::all();
    }
}
