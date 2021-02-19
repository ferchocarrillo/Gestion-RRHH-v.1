<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista1 extends Model
{
    
    protected $fillable = ['id_filtro','perfil','campana',
'fuente','fregistro','nombre','cedula','telefono','correo',
'fuente','citadoE','noAplica','noInteresado','enviadoCapa',
'entrevistaJefeInm','entrevistaGerencia','enviadocontratacion',
'enviadoExm','PruebasE','yaTrabaja','numeroEqu','observacion',
'noAsiste','NoResponde2','YaNoInt','Estudiante','observacion2',
'noAsisteEnt','entvOK'.'_token'];

    
    protected $table='entrevista1s';
}
