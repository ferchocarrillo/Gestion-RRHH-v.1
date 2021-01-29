<?php

namespace App\Exports;

use App\JhonatanPermission\Models\Requisicion;

use Maatwebsite\Excel\Concerns\FromCollection;

class RequisicionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Requisicion::all();
    }
}
