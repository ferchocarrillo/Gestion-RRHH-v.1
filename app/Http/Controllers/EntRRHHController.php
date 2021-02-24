<?php

namespace App\Http\Controllers;

use App\EntRRHH;
use App\Entrevista5;
use App\EntFinalizacion;
use App\Filtro;
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\resultadoRRHH;
use Carbon\Carbon;

use Illuminate\Http\Request;

class EntRRHHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $entrevistases = Entrevista5::orderBy('created_at', 'desc')->where('entvOK','=','entrevista 5 ok')->paginate(10);
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
       // $date = $date->format('d-m-Y'); 
        $this->authorize('haveaccess','entFinalizacion.edit');

        $filtro  = Filtro::findOrFail($id);
        // $entFinalizacion = EntFinalizacion::findOrFail($id);
        $entrevista5s = entrevista5::findOrFail($id);
        // $entrevista1s = Entrevista1::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        // $entrevista2s = Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        // $entrevista3s = Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        // $entrevista4s = Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $resultadoRrhhs = resultadoRRHH::all();
        //return response()->json($entFinalizacion);
    //return view('entGerencia.index', compact('entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s'));
      return view('entRRHH.edit', compact('date','filtro','resultadoRrhhs', 'entrevista5s')); 
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

        Carbon::setLocale('es');
        $date = Carbon::now();
        $resultadoRrhhs = resultadoRRHH::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro::findOrFail($id);
     //return response()->json($filtro);
     return view('entRRHH.edit', compact('filtro', 'date','resultadoRrhhs'));
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