<?php

namespace App\Http\Controllers;

use App\EntGerencia;
use App\Filtro2;
use Carbon\Carbon;
use App\Aprobacion;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EntGerenciaController extends Controller
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

        $entrevistases = Filtro2::orderBy('created_at', 'desc')->where('entrevistaGerencia','=','X')->paginate(10);
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
        Carbon::setLocale('co');
        $date = Carbon::now();

        $datosFiltro=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $request->validate([
            'entGerencia'          => 'required|unique:filtros,entGerencia,',


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
        $filtro->resultadoRrhh          = $request->resultadoRrhh;
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

        Carbon::setLocale('co');
        $date = Carbon::now();

        $this->authorize('haveaccess','entGerencia.edit');
        $aprobaciones = Aprobacion::all();
        $filtro  = Filtro2::findOrFail($id);


        //return response()->json($entFinalizacion);

      return view('entGerencia.edit', compact('date','filtro','aprobaciones'));
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
        Carbon::setLocale('co');
        $date = Carbon::now();

        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro2::findOrFail($id);
     //return response()->json($filtro);
     return view('entGerencia.edit', compact('filtro', 'date','aprobaciones'));
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
