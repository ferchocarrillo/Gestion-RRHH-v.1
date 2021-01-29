<?php

namespace App\Exports;

use App\Entrevista1;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class EntrevistaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entrevista1::all();
    }
}
