<?php

namespace App\Http\Controllers;

use App\Capacitacion;
use App\Filtro2;
use Carbon\Carbon;
use App\Aprobacion;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CapacitacionController extends Controller
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

        $filtros = Filtro2::orderBy('created_at', 'desc')->where('enviadoCapa','=','X')->where('resultadoFormacion','=',NULL)->paginate(10);
        return view('capacitacion.index',compact('filtros'));
    }

    public function searchCapacitacion( Request $request)
    {

        $filtros = Filtro2::all();
        $searchEntrevista = $request->get('searchCapacitacion');
        $filtros= Filtro2::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(20);
        return view('capacitacion.index', ['filtros' => $filtros]);
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

        $filtro = new Filtro2();

        $filtro->fregistro              = $request->fregistro;
        $filtro->nombre                 = $request->nombre;
        $filtro->cedula                 = $request->cedula;
        $filtro->telefono               = $request->telefono;
        $filtro->correo                 = $request->correo;
        $filtro->perfil                 = $request->cargos;
        $filtro->campaña                = $request->campana;
        $filtro->fuente                 = $request->fuente;
        $filtro->resultadoFormacion     = $request->resultadoFormacion;
        $filtro->ngrupo                 = $request->ngrupo;
        $filtro->obsFormacion           = $request->obsFormacion;
        $filtro->fechaFormacion         = $request->fechaFormacion;
        $filtro->save();

        //return response()->json($filtro);
        return back();
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
        $this->authorize('haveaccess','capacitacion.edit');
        $aprobaciones = Aprobacion::all();
        $filtro  = Filtro2::findOrFail($id);

        //return response()->json($entFinalizacion);

      return view('capacitacion.edit', compact('date','filtro','aprobaciones'));
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
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro2::findOrFail($id);
     //return response()->json($filtro);
     return view('capacitacion.edit', compact('filtro', 'date','aprobaciones'));
    }


}
