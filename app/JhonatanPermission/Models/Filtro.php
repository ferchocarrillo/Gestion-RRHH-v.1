<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\FiltroController;



class Filtro extends Model


{
    protected $fillable = ['perfil'];


    public function Filtro()

    {


    return $this->belongsTo(Filtros::class);
}
}
