<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Entrevista2Controller;



class Entrevista2 extends Model


{
    protected $fillable = ['entrevista2s'];


    public function Entrevista2()

    {


    return $this->belongsTo(Entrevista2::class);
}
}
