<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model{

    protected $table='asignacions';

    protected $fillable=['_token'];


    public function asignacion()
{
return $this->belongsTo('asignacion','id_filtro');
}
}