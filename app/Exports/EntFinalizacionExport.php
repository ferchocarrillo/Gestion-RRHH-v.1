<?php

namespace App\Exports;

use App\EntFinalizacion;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class EntFinalizacionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EntFinalizacion::all();
    }
}
