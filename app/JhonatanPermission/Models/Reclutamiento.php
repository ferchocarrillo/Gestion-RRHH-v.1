<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\ReclutamientoController;



class Reclutamiento extends Model


{
    protected $fillable = [

       'reclutamientos', 'cargo','sede', 'dependencia'];
    public function Reclutamiento()

    {


    return $this->belongsTo(Reclutamientos::class);
}
}
