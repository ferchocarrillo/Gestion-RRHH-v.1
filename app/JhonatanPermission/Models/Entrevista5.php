<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Entrevista5Controller;



class Entrevista5 extends Model


{
    protected $fillable = ['entrevista5s'];


    public function Entrevista5()

    {


    return $this->belongsTo(Entrevista5::class);
}
}
