<?php

namespace App\Http\Controllers;

use App\EntRRHH;
use App\Filtro2;
use App\resultadoRRHH;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EntRRHHController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('co');
        date_default_timezone_set('America/Bogota');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $entrevistases = Filtro2::orderBy('created_at', 'desc')->where('entvOK','=','X')->where('fechaRrhh','=',NULL)->paginate(10);
        return view('entRRHH.index',compact('entrevistases'));
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
        Carbon::setLocale('co');
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
        $filtro->cargo                  = $request->cargo;
        $filtro->campaña                = $request->campana;
        $filtro->fuente                 = $request->fuente;
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

        Carbon::setLocale('co');
        $date = Carbon::now();
       // $date = $date->format('d-m-Y');
        $this->authorize('haveaccess','entFinalizacion.edit');

        $filtro  = Filtro2::findOrFail($id);
        $resultadoRrhhs = resultadoRRHH::all();
        //return response()->json($entFinalizacion);
    //return view('entGerencia.index', compact('entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s'));
      return view('entRRHH.edit', compact('date','filtro','resultadoRrhhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filtro2  $filtro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Carbon::setLocale('co');
        $date = Carbon::now();
        $resultadoRrhhs = resultadoRRHH::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro2::findOrFail($id);
     //return response()->json($filtro);
     return view('entRRHH.edit', compact('filtro', 'date','resultadoRrhhs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filtro2 $filtro)
    {
        //
    }
}
