<?php

namespace App\Http\Controllers;

use App\EntJefe;
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

class EntJefeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = Filtro::orderBy('id', 'asc')->paginate(10);
        return view('entjefe.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $entJefe = EntJefe::all();
        $entFinalizacion = EntFinalizacion::all();
        $reclutamientos=Reclutamiento::all();
        return view('entJefe.create',compact('entJefe','entFinalizacion','reclutamientos'));
    }
    public function searchEntGerencia( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $searchEntJefe= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entJefe.index', ['searchEntJefe' => $searchEntJefe]);
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
            'cedula'  => 'required|unique:ent_jefe,cedula,',
        ]);
        $entJefe = new EntJefe();
        $entJefe->id_filtro        = $request->id_filtro;
        $entJefe->cedula           = $request->cedula;
        $entJefe->nombre           = $request->nombres;
        $entJefe->resultadojefe    = $request->resultadojefe;
        $entJefe->obsJefe          = $request->obsJefe;

        $entJefe->save();
        return back();
       /// return response()->json($entJefe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntJefe  $entJefe
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','entGerencia.view');
        $entJefe=EntJefe::all();
        $entrevista1s=Entrevista1::all();
        $filtro=Filtro::all();
        return view('entJefe.view', compact('entjefe','entrevista1s','filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntJefe  $entJefe
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

        $this->authorize('haveaccess','entFinalizacion.edit');

        $filtro=Filtro::findOrFail($id);
        $entrevista1s=entrevista1::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion=entFinalizacion::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entJefe=EntJefe::all();

       return view('entJefe.view', compact('entJefe','entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s','filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntJefe  $entJefe
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $datosentFinalizacion =request()->except(['_token','_method']);
        EntJefe::where('id','=',$id)->update($datosentFinalizacion);
        $entJefe=EntJefe::findOrFail($id);
        //return response()->json($entJefe);
        return view('entJefe.edit', compact('entJefe','entFinalizacion'));
    }



}
