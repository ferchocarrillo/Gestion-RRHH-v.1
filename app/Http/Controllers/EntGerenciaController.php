<?php

namespace App\Http\Controllers;

use App\EntGerencia;
use App\Entrevista5;
use App\EntFinalizacion;
use App\Filtro;
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\resultadoRRHH;
use Carbon\Carbon;
use App\Aprobacion;

use Illuminate\Http\Request;

class EntGerenciaController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
        date_default_timezone_set('America/Bogota');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $entrevistases = Filtro::orderBy('created_at', 'desc')->where('resultadoRrhh','=','Cargo requiere segunda entrevista')->paginate(10);
        return view('entGerencia.index',compact('entrevistases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Carbon::setLocale('es');
        $date = Carbon::now();

        $datosFiltro=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $request->validate([
            'nombre'          => 'required|unique:filtros,nombre,',


        ]);

        $filtro = new Filtro();

        $filtro->fregistro              = $request->fregistro;
        $filtro->nombre                 = $request->nombre;
        $filtro->cedula                 = $request->cedula;
        $filtro->telefono               = $request->telefono;
        $filtro->correo                 = $request->correo;
        $filtro->perfil                 = $request->cargos;
        $filtro->campaña                = $request->campana;
        $filtro->fuente                 = $request->fuente;
        $filtro->resultadoRrhh          = $request->resultadoRrhh;
        $filtro->obsRrhh                = $request->obsRrhh;
        $filtro->fechaRrhh              = $request->fechaRrhh;
        $filtro->save();

        //return response()->json($filtro);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntRRHH  $entRRHH
     * @return \Illuminate\Http\Response
     */
    public function show(EntRRHH $entRRHH)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntRRHH  $entRRHH
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        Carbon::setLocale('es');
        $date = Carbon::now();

        $this->authorize('haveaccess','entFinalizacion.edit');
        $aprobaciones = Aprobacion::all();
        $filtro  = Filtro::findOrFail($id);
        $entrevista5s = entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();

        //return response()->json($entFinalizacion);

      return view('entGerencia.edit', compact('date','filtro', 'entrevista5s','aprobaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aprobaciones = Aprobacion::all();
        Carbon::setLocale('es');
        $date = Carbon::now();

        $datosFiltro =request()->except(['_token','_method']);
        Filtro::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro::findOrFail($id);
     //return response()->json($filtro);
     return view('entGerencia.edit', compact('filtro', 'date','aprobaciones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filtro $filtro)
    {
        //
    }
}
