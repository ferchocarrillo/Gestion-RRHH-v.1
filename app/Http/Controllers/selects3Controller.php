<?php

namespace App\Http\Controllers;

use App\Ciudades3;
use Illuminate\Http\Request;

class selects3Controller extends Controller
{
    public function Ciudad3(Request $request){

        $areas = Ciudades3::where('Id_dependencia', $request->id)->get();
        $html='';
        foreach ($areas as $key) {
            $html.="<option value='".$key['id_area']."'>".$key['Area']."</option>";
        }


            return response()->json($areas) ;

    }
}
