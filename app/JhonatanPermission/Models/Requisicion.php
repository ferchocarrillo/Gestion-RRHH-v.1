<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\RequisicionController;



class Requisicion extends Model


{
    protected $fillable = [

        'cargo','sede', 'dependencia'];
    public function Requisicion()

    {


    return $this->belongsTo(Requisicion::class);
}
}
