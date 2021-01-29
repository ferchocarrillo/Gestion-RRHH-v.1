<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Entrevista4Controller;



class Entrevista4 extends Model


{
    protected $fillable = ['entrevista4s'];


    public function Entrevista4()

    {


    return $this->belongsTo(Entrevista4::class);
}
}
