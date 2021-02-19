<?php

namespace App\Http\Controllers;

use App\entrevista4;
use App\Entrevista3;
use App\Entrevista1;
use Illuminate\Http\Request;
use App\Filtro;
use App\reclutamiento;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional2;
use App\Adicional;
use App\Residencia;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Entrevista4Export;

class Entrevista4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = Entrevista3::orderBy('created_at', 'desc')->where('entvOK','=','entrevista 3 ok')
        ->paginate(20);
        return view('entrevista4.index',compact( 'entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrevista4 = Entrevista4::all();
        $reclutamientos=Reclutamiento::all();

        return view('entrevista4.create',compact('entrevistas4','reclutamientos'));
    }

    public function searchEntrevista4( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $entrevistas4= Entrevista1::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entrevista4.index', ['entrevistas4' => $entrevistas4]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $datosEntrevista=request()->except('_token');

       $request->validate([
            'cedula'          => 'required|unique:entrevista4s,cedula,',
        ]);
Carbon::setLocale('es');
Carbon::now();
$hoy = Carbon::now();

$date1 = $request->input('fechain1');
$date2 = $request->input('fechart1');
$tiempoA = $hoy->floatDiffInRealDays($date1);
$tiempoB = $hoy->floatDiffInRealDays($date2);
 
$tiempo1 = $tiempoA - $tiempoB;

$date3 = $request->input('fechain2');
$date4 = $request->input('fechart2');
$tiempoC = $hoy->floatDiffInRealDays($date3);
$tiempoD = $hoy->floatDiffInRealDays($date4);
 
$tiempo2 = $tiempoC - $tiempoD;

$date5 = $request->input('fechain3');
$date6 = $request->input('fechart3');
$tiempoE = $hoy->floatDiffInRealDays($date5);
$tiempoF = $hoy->floatDiffInRealDays($date6);
 
$tiempo3 = $tiempoE - $tiempoF;

$date7 = $request->input('fechain4');
$date8 = $request->input('fechart4');
$tiempoG = $hoy->floatDiffInRealDays($date7);
$tiempoH = $hoy->floatDiffInRealDays($date8);
 
$tiempo4 = $tiempoG - $tiempoH;

$date9 = $request->input('fechain5');
$date10 = $request->input('fechart5');
$tiempoI = $hoy->floatDiffInRealDays($date9);
$tiempoJ = $hoy->floatDiffInRealDays($date10);
 
$tiempo5 = $tiempoI - $tiempoJ;


        $entrevista4s = new Entrevista4();
        $entrevista4s->id_filtro        = $request->id_filtro;
        $entrevista4s->cedula           = $request->cedula;
        $entrevista4s->nombres          = $request->nombres;
        $entrevista4s->telefono         = $request->telefono;
        $entrevista4s->correo           = $request->correo;
        $entrevista4s->empresa1         = $request->empresa1;
        $entrevista4s->fechain1         = $request->fechain1;
        $entrevista4s->fechart1         = $request->fechart1;
        $entrevista4s->tiempo1          = $tiempo1;
        $entrevista4s->sinExp           = $request->sinExp;
        $entrevista4s->hlcargo1         = $request->hlcargo1;
        $entrevista4s->jefeinm1         = $request->jefeinm1;
        $entrevista4s->teleinf1         = $request->teleinf1;
        $entrevista4s->salarioh1        = $request->salarioh1;
        $entrevista4s->motivor1         = $request->motivor1;
        $entrevista4s->empresa2         = $request->empresa2;
        $entrevista4s->fechain2         = $request->fechain2;
        $entrevista4s->fechart2         = $request->fechart2;
        $entrevista4s->tiempo2          = $tiempo2;
        $entrevista4s->hlcargo2         = $request->hlcargo2;
        $entrevista4s->jefeinm2         = $request->jefeinm2;
        $entrevista4s->teleinf2         = $request->teleinf2;
        $entrevista4s->salarioh2        = $request->salarioh2;
        $entrevista4s->motivor2         = $request->motivor2;
        $entrevista4s->empresa3         = $request->empresa3;
        $entrevista4s->fechain3         = $request->fechain3;
        $entrevista4s->fechart3         = $request->fechart3;
        $entrevista4s->tiempo3          = $tiempo3;
        $entrevista4s->hlcargo3         = $request->hlcargo3;
        $entrevista4s->jefeinm3         = $request->jefeinm3;
        $entrevista4s->teleinf3         = $request->teleinf3;
        $entrevista4s->salarioh3        = $request->salarioh3;
        $entrevista4s->motivor3         = $request->motivor3;
        $entrevista4s->empresa4         = $request->empresa4;
        $entrevista4s->fechain4         = $request->fechain4;
        $entrevista4s->fechart4         = $request->fechart4;
        $entrevista4s->tiempo4          = $tiempo4;
        $entrevista4s->hlcargo4         = $request->hlcargo4;
        $entrevista4s->jefeinm4         = $request->jefeinm4;
        $entrevista4s->teleinf4         = $request->teleinf4;
        $entrevista4s->salarioh4        = $request->salarioh4;
        $entrevista4s->motivor4         = $request->motivor4;
        $entrevista4s->empresa5         = $request->empresa5;
        $entrevista4s->fechain5         = $request->fechain5;
        $entrevista4s->fechart5         = $request->fechart5;
        $entrevista4s->tiempo5          = $tiempo5;
        $entrevista4s->hlcargo5         = $request->hlcargo5;
        $entrevista4s->jefeinm5         = $request->jefeinm5;
        $entrevista4s->teleinf5         = $request->teleinf5;
        $entrevista4s->salarioh5        = $request->salarioh5;
        $entrevista4s->motivor5         = $request->motivor5;
        $entrevista4s->entvOK           = $request->entvOK;
        $entrevista4s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrevista4  $entrevista4
     * @return \Illuminate\Http\Response
     */
    public function show(entrevista4 $entrevista4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevista4  $entrevista4
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $this->authorize('haveaccess','entrevista4.edit');
       $filtro=Entrevista1::findOrFail($id);


       return view('entrevista4.edit', compact('filtro'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevista4  $entrevista4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosentrevista4 =request()->except(['_token','_method']);
        entrevista4::where('id_filtro','=',$id)->update($datosentrevista4);
        $entrevista4=entrevista4::findOrFail($id);
     //return response()->json($entrevista1);
     return view('entrevista4.edit', compact('entrevista4'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrevista4  $entrevista4
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entrevista4.destroy');
        Entrevista4::destroy($id);

        return redirect()->route('entrevista4.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new Entrevista4Export, 'entrevista4-list.xlsx');

}
}
