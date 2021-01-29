<?php

namespace App\Exports;

use App\Entrevista4;
use App\JhonatanPermission\Models\Reclutamiento;

use Maatwebsite\Excel\Concerns\FromCollection;

class Entrevista4Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entrevista4::all();
    }
}
