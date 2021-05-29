<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Novedades;
use App\verNovedades;
use Illuminate\Http\Request;
use App\Contratacion;
use App\Filtro2;
use Dotenv\Result\Success;
use App\TipoNovedad;
use App\nuevoEmpleado;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class NovedadesController extends Controller
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
        $filtros = Filtro2::orderBy('created_at', 'desc')->where('estado','=','activo')->paginate(10);
        return view('novedades.index',compact('filtros'));
    }

    public function searchNovedades( Request $request)

    {
        $activos = Asignacion::all();

        $searchNovedades = $request->get('searchNovedades');
        $activos= Asignacion::firstOrNew()->where('cedula', 'like', '%'.$searchNovedades.'%')->paginate(30);
        $novedades = Novedades::where('Id_filtro', '=', $activos->id)->get();

        return Asignacion::make('otra.novedad')
        ->with('asignacion', $activos)
        ->with('novedades', $novedades);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filtros = Filtro2::orderBy('created_at', 'desc')->where('estado','=','activo')->paginate(10);
        return view('novedades.create', compact('filtros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $date1 = $request->input('desde');
        $date2 = $request->input('hasta');
        $tiempoA = $hoy->floatDiffInRealDays($date1);
        $tiempoB = $hoy->floatDiffInRealDays($date2);

        $totalDias = $tiempoB - $tiempoA + 1;

        $datosFiltro=request()->except('_token');




        $filtro = new Novedades();

        $filtro->nombre                 = $request->nombre;
        $filtro->cedula                 = $request->cedula;
        $filtro->campaña                = $request->campaña;
        $filtro->foco                   = $request->foco;
        $filtro->cargo                  = $request->cargo;
        $filtro->supervisor             = $request->supervisor;
        $filtro->estado                 = $request->estado;

        $filtro->novedad                = $request->novedad;
        $filtro->observaciones          = $request->observaciones;
        $filtro->desde                  = $request->desde;
        $filtro->hasta                  = $request->hasta;
        $filtro->totalDias              = $totalDias;
        $filtro->save();

        //return response()->json($filtro);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function show(Novedades $novedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $filtros = Filtro2::findOrFail($id);
        $tipoNovedades = TipoNovedad::all();




        return view('novedades.edit',compact('filtros','tipoNovedades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosNovedades =request()->except(['_token','_method']);
        Novedades::where('id','=',$id)->update($datosNovedades);
        $filtro=Novedades::findOrFail($id);
     //return response()->json($filtro);
     return view('novedades.edit', compact('filtro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedades $novedades)
    {
        //
    }
}
