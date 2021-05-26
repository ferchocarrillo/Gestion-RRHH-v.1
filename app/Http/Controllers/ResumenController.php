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
        $edad = $date1->floatDiffInYears($date2);
        $edad = number_format($edad,2,'.',',');

        $fechain1 = $filtro->fechain1;
        $fechart1 = $filtro->fechart1;
        $tiempoa = $date1->floatDiffInMonths($fechain1);
        $tiempob = $date1->floatDiffInMonths($fechart1);
        $tiempo1 = $tiempoa-$tiempob;
        $tiempo1 = number_format($tiempo1,2,'.',',');

        $fechain2 = $filtro->fechain2;
        $fechart2 = $filtro->fechart2;
        $tiempoc = $date1->floatDiffInMonths($fechain2);
        $tiempod = $date1->floatDiffInMonths($fechart2);
        $tiempo2 = $tiempoc-$tiempod;
        $tiempo2 = number_format($tiempo2,2,'.',',');

        $fechain3 = $filtro->fechain3;
        $fechart3 = $filtro->fechart3;
        $tiempoe = $date1->floatDiffInMonths($fechain3);
        $tiempof = $date1->floatDiffInMonths($fechart3);
        $tiempo3 = $tiempoe-$tiempof;
        $tiempo3 = number_format($tiempo3,2,'.',',');

        $fechain4 = $filtro->fechain4;
        $fechart4 = $filtro->fechart4;
        $tiempog = $date1->floatDiffInMonths($fechain4);
        $tiempoh = $date1->floatDiffInMonths($fechart4);
        $tiempo4 = $tiempog-$tiempoh;
        $tiempo4 = number_format($tiempo4,2,'.',',');

        $fechain5 = $filtro->fechain5;
        $fechart5 = $filtro->fechart5;
        $tiempoi = $date1->floatDiffInMonths($fechain5);
        $tiempoi = $date1->floatDiffInMonths($fechart5);
        $tiempo5 = $tiempoi-$tiempoi;
        $tiempo5 = number_format($tiempo5,2,'.',',');


        return view('resumen.view', compact('filtro','edad' ,'tiempo1','tiempo2','tiempo3','tiempo4'));
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
