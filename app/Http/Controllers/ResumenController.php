<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\resumen;
use App\EntFinalizacion;
use App\Filtro2;
use App\reclutamiento;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional2;
use App\Adicional;
use App\EntGerencia;
use App\EntJefe;

use App\Residencia;
use App\User;
use stdClass;
use App\nuevoEmpleado;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;

class ResumenController extends Controller
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
        $entrevistas = Filtro2::orderBy('created_at', 'desc')->paginate(10);
        return view('resumen.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }


    public function searchResumen( Request $request)
    {


        $searchResumen = $request->get('searchResumen');
        $searchResumen= Filtro2::firstOrNew()->where('cedula', 'like', '%'.$searchResumen.'%')->paginate(5);
        return view('resumen.index', ['searchResumen' => $searchResumen]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','resumen.view');
        $filtro=Filtro2::findOrFail($id);
       return view('resumen.view', compact('filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $filtro=Filtro2::findOrFail($id);
        $date1 = Carbon::now();
        $date2 = $filtro->fnacimiento;
        $edad = $date1->diffInYears($date2);


        return view('resumen.view', compact('filtro','edad'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resumen  $resumen
     * @return \Illuminate\Http\Response
     */
        public function update (Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntGerencia $entGerencia)
    {
        //
    }


}
