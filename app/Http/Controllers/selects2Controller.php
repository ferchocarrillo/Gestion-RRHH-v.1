<?php

namespace App\Http\Controllers;

use App\Ciudades2;
use Illuminate\Http\Request;

class selects2Controller extends Controller
{
    public function Ciudad2(Request $request){

        $localidades = Ciudades2::where('id_residencia', $request->id)->get();
        $html='';
        foreach ($localidades as $key) {
            $html.="<option value='".$key['id']."'>".$key['localidad']."</option>";
        }


            return response()->json($localidades) ;

    }
}
