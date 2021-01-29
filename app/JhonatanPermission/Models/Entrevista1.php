<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Entrevista1Controller;



class Entrevista1 extends Model


{
    protected $fillable = ['entrevista1s'];


    public function Entrevista1()

    {


    return $this->belongsTo(Entrevista1::class);
}
}
