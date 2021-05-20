<?php

namespace App\Http\Controllers;

use App\EntrevistaCompleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Entrevista1;
use App\Adicional2;
use App\Adicional;
use App\Cargo;
use App\Residencia;
use App\cargoEnt;
use App\eCivil;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntrevistaExport;
use App\sMilitar;
use App\tVivienda;
use App\Filtro;


class EntrevistaCompletaController extends Controller
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
        $date1 = Carbon::now();
        $date2 = $request->input('fnacimiento');
        $edad = $date1->diffInYears($date2);
        $datosEntrevista=request()->except('_token');
        $request->validate([
            'cedula'          => 'required|unique:entrevistacompleta,cedula,',
        ]);
        $entrevistaCompleta = new EntrevistaCompleta();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntrevistaCompleta  $entrevistaCompleta
     * @return \Illuminate\Http\Response
     */
    public function show(EntrevistaCompleta $entrevistaCompleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntrevistaCompleta  $entrevistaCompleta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filtros= Filtro::findOrFail($id);
        $cargos = Cargo::all();
        $cargoEnt = CargoEnt::all();
        $departamento = Departamentos::all();
        $TipoVias = TipoVia::all();
        $prefijos = Prefijo::all();
        $orientaciones = Orientacion::all();
        $adicionales = Adicional::all();
        $adicional2es = Adicional2::all();
        $residencia = Residencia::all();
        $tViviendas = tVivienda::all();
        $sMilitars = sMilitar::all();
        $eCivils= eCivil::all();

        $this->authorize('haveaccess','entrevistacompleta.edit');

        return view('entrevistacompleta.edit', compact('eCivils','sMilitars','tViviendas','cargos','cargoEnt','filtros','departamento','residencia','adicional2es','adicionales','orientaciones','TipoVias','prefijos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntrevistaCompleta  $entrevistaCompleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntrevistaCompleta $entrevistaCompleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntrevistaCompleta  $entrevistaCompleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntrevistaCompleta $entrevistaCompleta)
    {
        //
    }
}
