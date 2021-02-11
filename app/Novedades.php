<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedades extends Model{


public function novedades()
{
    return $this->hasMany('novedades','id_filtro');
}
}