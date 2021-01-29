<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\PerfilController;



class Perfil extends Model


{
    protected $fillable = ['perfil'

        ];
    public function Perfil()

    {


    return $this->belongsTo(Perfiles::class);
}
}
