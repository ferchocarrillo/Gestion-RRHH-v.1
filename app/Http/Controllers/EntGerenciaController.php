<?php

namespace App\Http\Controllers;

use App\EntGerencia;
use App\EntFinalizacion;
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
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\Entrevista5;
use App\Residencia;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;

class EntGerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = Filtro::orderBy('id', 'asc')->paginate(10);
        return view('entGerencia.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $entGerencia = EntGerencia::all();
        $entFinalizacion = EntFinalizacion::all();
        $reclutamientos=Reclutamiento::all();
        return view('entGerencia.create',compact('entGerencia','entFinalizacion','reclutamientos'));
    }


    public function searchEntGerencia( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $searchEntGerencia= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entGerencia.index', ['searchEntGerencia' => $searchEntGerencia]);
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
        $datosEntrevista=request()->except('_token', 'fechaCont');

        $entGerencia = new EntFinalizacion();
        $entGerencia->id_filtro        = $request->id_filtro;
        $entGerencia->cedula           = $request->cedula;
        $entGerencia->nombres          = $request->nombres;
        $entGerencia->fechaCont        = $request->fechaCont;
        $entGerencia->resultadoGer     = $request->resultadoGer;
        $entGerencia->obsGerencia      = $request->obsGerencia;

        $entGerencia->save();
        return back();
        ///return response()->json($entGerencia);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $this->authorize('haveaccess','entFinalizacion.edit');

        $filtro=Filtro::findOrFail($id);
        $entrevista1s=entrevista1::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion=entFinalizacion::where('id_filtro', Filtro::findOrFail($id)->id)->first();
       /* $entGerencia=entGerencia::all();*/

       return view('entGerencia.view', compact('entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s','filtro'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
        public function update (EntGerencia $entGerencia ,$id, Request $request)
    {
        $request->validate([
            'resultadoGer'=>['required'],
            'obsGerencia' =>'required',

        ]);
$entGerencia->update([

            'resultadoGer'=>$request->input('resultadoGer'),
            'obsGerencia' =>$request->input('obsGerencia'),

]);


        return "se registro la entrevista con gerencia: {$entGerencia->resultadoGer}";

        /*$datosentFinalizacion =request()->except(['_token','_method']);
        EntFinalizacion::where('id_filtro','=',$id)->update($datosentFinalizacion);
        $entGerencia=EntFinalizacion::findOrFail($id);
        //return response()->json($entGerencia);
        return view('entGerencia.edit', compact('entGerencia','entFinalizacion'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntGerencia $entGerencia)
    {
        //
    }


}
