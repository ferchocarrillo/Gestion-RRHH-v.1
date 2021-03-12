<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\resumen;
use App\EntFinalizacion;
use App\Filtro;
use App\reclutamiento;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional2;
use App\Adicional;
use App\EntGerencia;
use App\EntJefe;
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\Entrevista5;
use App\Residencia;
use App\User;
use stdClass;
use App\nuevoEmpleado;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;

class ResumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = nuevoEmpleado::orderBy('created_at', 'desc')->paginate(10);
        return view('resumen.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $resumen = resumen::all();
        $entFinalizacion = EntFinalizacion::all();
        $reclutamientos=Reclutamiento::all();
        return view('resumen.create',compact('resumen','entFinalizacion','reclutamientos'));
    }


    public function searchResumen( Request $request)
    {


        $searchResumen = $request->get('searchResumen');
        $searchResumen= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchResumen.'%')->paginate(5);
        return view('resumen.index', ['searchResumen' => $searchResumen]);
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

        $resumen = new resumen();
        $resumen->id_filtro        = $request->id_filtro;
        $resumen->cedula           = $request->cedula;
        $resumen->nombre           = $request->nombres;
        $resumen->resultadoGer     = $request->resultadoGer;
        $resumen->obsGerencia      = $request->obsGerencia;

        $resumen->save();
        return back();
        ///return response()->json($resumen);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','resumen.view');
        $resumen=resumen::all();
        $entrevista1s=Entrevista1::all();
        $filtro=Filtro::all();
        return view('resumen.view', compact('resumen','entrevista1s','filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)

    {

        $this->authorize('haveaccess','resumen.edit');

        $filtro=Filtro::findOrFail($id);
        $entrevista1s=entrevista1::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion=entFinalizacion::where('id_filtro', Filtro::findOrFail($id)->id)->first();

        $resumen=resumen::all();

       return view('resumen.edit', compact('resumen','entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s','filtro'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resumen  $resumen
     * @return \Illuminate\Http\Response
     */
        public function update (Request $request, $id)
    {
        $datosresumen =request()->except(['_token','_method']);
        resumen::where('id','=',$id)->update($datosresumen);
        $resumen=resumen::findOrFail($id);
        //return response()->json($resumen);
        return view('resumen.edit', compact('resumen','entFinalizacion'));
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
