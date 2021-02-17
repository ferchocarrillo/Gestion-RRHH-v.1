<?php

namespace App\Http\Controllers;

use App\capacitacion;
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
use App\Aprobacion;
use App\EntGerencia;
use App\EntJefe;
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\Entrevista5;
use App\Residencia;
use App\Bancos;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;


class CapacitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevista = Entrevista1::all();
        $filtros = Filtro::orderBy('id', 'asc')->paginate(10);
        return view('capacitacion.index',compact('filtros','entrevista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capacitacion = capacitacion::all();
        $resumen = resumen::all();
        $entFinalizacion = EntFinalizacion::all();
        $reclutamientos=Reclutamiento::all();
        return view('capacitacion.create',compact('resumen','capacitacion','entFinalizacion','reclutamientos'));
    }

    public function searchcapacitacion( Request $request)
    {

        $filtros = Filtro::all();
        $entrevista = Entrevista1::all();
        $searchcapacitacion = $request->get('searchcapacitacion');
        $filtros = Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchcapacitacion.'%')->paginate(5);
        return view('capacitacion.index', ['filtros' => $filtros]);


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
            'cedula'          => 'required|unique:capacitacions,cedula,',
        ]);
        $capacitacion = new Capacitacion();
        $capacitacion->id_filtro        = $request->id_filtro;
        $capacitacion->cedula           = $request->cedula;
        $capacitacion->nombre           = $request->nombres;
        $capacitacion->estado           = $request->estado;
        $capacitacion->observaciones    = $request->observaciones;

        $capacitacion->save();
        return back();
        //return response()->json($capacitacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','resumen.view');
        $capacitacion = Capacitacion::all();
        $resumen=resumen::all();
        $entrevista1s=Entrevista1::all();
        $filtro=Filtro::all();
        return view('resumen.view', compact('capacitacion','resumen','entrevista1s','filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\capacitacion  $capacitacion
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
        $entGerencia=EntGerencia::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entJefe=EntJefe::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $bancoses = Bancos::all();
        $capacitacion = Capacitacion::all();
$aprobacions = Aprobacion::all();



       return view('capacitacion.view', compact('aprobacions','bancoses','capacitacion','entJefe','entGerencia','entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s','filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $datoscapacitacion =request()->except(['_token','_method']);
        resumen::where('id','=',$id)->update($datoscapacitacion);
        $capacitacion=capacitacion::findOrFail($id);
        //return response()->json($capacitacion);
        return view('capacitacion.edit', compact('capacitacion','entFinalizacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\capacitacion  $capacitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(capacitacion $capacitacion)
    {
        //
    }
}
