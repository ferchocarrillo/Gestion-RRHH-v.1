<?php

namespace App\Http\Controllers;

use App\Retiros;
use Illuminate\Http\Request;
use App\nuevoEmpleado;
use App\CausasRetiro;
use App\Filtro;
use Carbon\carbon;


class RetirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $hoy = Carbon::now();

        $date1 = $request->input('fechaCont');
        $date2 = $request->input('iDesde');
        $tiempoA = $hoy->floatDiffInRealDays($date1);
        $tiempoB = $hoy->floatDiffInRealDays($date2);
        $tiempo1 = $tiempoA - $tiempoB;


        $datosFiltro=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $request->validate([
            'nombre'          => 'required|unique:filtros,nombre,',


        ]);

        $filtro = new Filtro();

        $filtro->estado                 = $request->estado;
        $filtro->causalesR              = $request->causalesR;
        $filtro->iDesde                 = $request->iDesde;
        $filtro->apretencion            = $request->apretencion;
        $filtro->retejefe               = $request->retejefe;
        $filtro->reterrhh               = $request->reterrhh;
        $filtro->obsRetiro              = $request->obsRetiro;
        $filtro->tiempoTotal            = $tiempo1;




        $filtro->save();

        return response()->json($filtro);
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function show(Retiros $retiros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nuevos = nuevoEmpleado::all();
        $causas = CausasRetiro::all();
        $filtro = filtro::findOrFail($id)->first();
        $nuevos = nuevoEmpleado::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        return view('retiros.edit', compact('filtro', 'causas','nuevos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Carbon::setLocale('es');
        $date = Carbon::now();
        $causas = CausasRetiro::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro::findOrFail($id);
        $nuevos = nuevoEmpleado::where('id_filtro', Filtro::findOrFail($id)->id)->first();
     //return response()->json($filtro);
     return view('retiros.edit', compact('filtro', 'date','causas','nuevos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retiros $retiros)
    {
        //
    }
}
