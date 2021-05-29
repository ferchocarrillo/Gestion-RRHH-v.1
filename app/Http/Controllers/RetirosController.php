<?php

namespace App\Http\Controllers;

use App\Retiros;
use Illuminate\Http\Request;
use App\nuevoEmpleado;
use App\CausasRetiro;
use App\Filtro2;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;


class RetirosController extends Controller
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
    public function store(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        Carbon::setLocale('co');
        $hoy = Carbon::now();
        $filtros = Filtro2::findOrFail($id)->first();
        $date1 = $filtros->ingreso;
        $date2 = $filtros->iDesde;
        $tiempoA = $hoy->diffInMonths($date1);
        $tiempoB = $hoy->diffInMonths($date2);
        $tiempoTotal = ($tiempoB - $tiempoA);


        $datosFiltro=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $request->validate([
            'nombre'          => 'required|unique:filtros,nombre,',


        ]);

        $filtro = new Filtro2();

        $filtro->estado                 = $request->estado;
        $filtro->causalesR              = $request->causalesR;
        $filtro->iDesde                 = $request->iDesde;
        $filtro->apretencion            = $request->apretencion;
        $filtro->retejefe               = $request->retejefe;
        $filtro->reterrhh               = $request->reterrhh;
        $filtro->obsRetiro              = $request->obsRetiro;
        $filtro->tiempoTotal            = $request->tiempoTotal;




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
    public function edit(Request $request, $id)
    {
        Carbon::setLocale('co');
        $hoy = Carbon::now();
        $filtros = Filtro2::findOrFail($id)->first();
        $date1 = $filtros->ingreso;
        $date2 = $filtros->iDesde;
        $tiempoA = $hoy->diffInMonths($date1);
        $tiempoB = $hoy->diffInMonths($date2);
        $tiempoTotal = ($tiempoA - $tiempoB);

        $causas = CausasRetiro::all();

        return view('retiros.edit', compact('filtros', 'causas'));
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
        Carbon::setLocale('co');
        $hoy = Carbon::now();
        $filtros = Filtro2::findOrFail($id)->first();
        $date1 = $filtros->ingreso;
        $date2 = $filtros->iDesde;
        $tiempoA = $hoy->diffInMonths($date1);
        $tiempoB = $hoy->diffInMonths($date2);
        $tiempoTotal = ($tiempoA - $tiempoB);
        $causas = CausasRetiro::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtros=Filtro2::findOrFail($id);

     return view('retiros.edit', compact('filtros', 'hoy','causas','tiempoTotal'));
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
