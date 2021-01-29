<?php

namespace App\Http\Controllers;
use App\Areas;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function Area(Request $request){

        $areas = Areas::where('id_dependencia', $request->id)->get();
        $html='';
        foreach ($areas as $key) {
            $html.="<option value='".$key['id']."'>".$key['Area']."</option>";
        }




            return response()->json($areas) ;

    }
}
