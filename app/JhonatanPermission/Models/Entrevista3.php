<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Entrevista3Controller;



class Entrevista3 extends Model


{
    protected $fillable = ['entrevista3s'];


    public function Entrevista3()

    {


    return $this->belongsTo(Entrevista3::class);
}
}
