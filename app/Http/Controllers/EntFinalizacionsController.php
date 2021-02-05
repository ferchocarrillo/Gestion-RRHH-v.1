<?php

namespace App\Http\Controllers;

use App\ent_finalizacions;
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
use App\EntGerencia;
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

class EntFinalizacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = Filtro::orderBy('id', 'asc')->paginate(10);

        return view('entFinalizacion.index',compact('entrevistas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ent_finalizacions  $ent_finalizacions
     * @return \Illuminate\Http\Response
     */
    public function show(ent_finalizacions $ent_finalizacions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ent_finalizacions  $ent_finalizacions
     * @return \Illuminate\Http\Response
     */
    public function edit(ent_finalizacions $ent_finalizacions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ent_finalizacions  $ent_finalizacions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ent_finalizacions $ent_finalizacions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ent_finalizacions  $ent_finalizacions
     * @return \Illuminate\Http\Response
     */
    public function destroy(ent_finalizacions $ent_finalizacions)
    {
        //
    }
}
