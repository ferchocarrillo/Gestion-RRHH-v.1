<?php

namespace App\Exports;

use App\Entrevista5;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class Entrevista5Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entrevista5::all();
    }
}
