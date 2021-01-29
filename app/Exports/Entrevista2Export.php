<?php

namespace App\Exports;

use App\Entrevista2;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class Entrevista2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entrevista2::all();
    }
}
