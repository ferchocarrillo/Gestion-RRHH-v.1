<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_vias extends Model
{
    protected $fillable = ['tipo_vias'

];
public function Tipo_vias()

{


return $this->belongsTo(Tipo_vias::class);
}
}
