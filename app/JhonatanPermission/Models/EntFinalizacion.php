<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\EntFinalizacionController;




class EntFinalizacion extends Model


{
    protected $fillable = ['ent_finalizacions'];


    public function EntFinalizacion()

    {

        $entrevista1 = Entrevista1::all();
        $entrevista2 = Entrevista2::all();
        $entrevista3 = Entrevista3::all();
        $entrevista4 = Entrevista4::all();
        $entrevista5 = Entrevista5::all();



    return $this->belongsTo(EntFinalizacion::class);
}
}
