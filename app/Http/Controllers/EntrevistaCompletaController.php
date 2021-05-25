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
use App\Filtro2;
use App\parentesco;

class EntrevistaCompletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $filtros = Filtro2::orderBy('id', 'asc')->where('citadoE','=','X')->where('noAsisteEnt','=',null)->where('entvOK','<>','X')->paginate(20);
        return view('entrevistacompleta.index',compact( 'filtros'));
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
        $date1   = Carbon::now();
        $date2   = $request->input('fnacimiento');
        $edad    = $date1->diffInYears($date2);

        $input1  = $request->get('TipoVia');
        $input2  = $request->get('dr1');
        $input3  = $request->get('prefijo1');
        $input4  = $request->get('dr2');
        $input5  = $request->get('prefijo2');
        $input6  = $request->get('dr3');
        $input7  = $request->get('orientacion');
        $input8  = $request->get('adicional');
        $input9  = $request->get('ad1');
        $input10 = $request->get('adicional2');
        $input11 = $request->get('ad2');
        $input12 = $request->get('adicional3');
        $input13 = $request->get('ad3');

     $datosEntrevista=request()->except('_token');
        $request->validate([
            'cedula'          => 'required|unique:entrevistacompleta,cedula,',
        ]);
        $entrevistaCompleta = new EntrevistaCompleta();

        $entrevistaCompleta->nombre           = $request->nombre;
        $entrevistaCompleta->cedula           = $request->cedula;
        $entrevistaCompleta->telefono         = $request->telefono;
        $entrevistaCompleta->correo           = $request->correo;
        $entrevistaCompleta->cargo            = $request->cargo;
        $entrevistaCompleta->referencia       = $request->referencia;
        $entrevistaCompleta->fnacimiento      = $request->fnacimiento;
        $entrevistaCompleta->direccion        = $input1 .$input2 .$input3 .$input4 .$input5 .$input6 .$input7;
        $entrevistaCompleta->adicionales      = $input8 .$input9 .$input10 .$input11 .$input12 .$input13;
        $entrevistaCompleta->barrio           = $request->barrio;
        $entrevistaCompleta->residencia       = $request->residencia;
        $entrevistaCompleta->id_localidad     = $request->id_localidad;
        $entrevistaCompleta->edad             = $edad;


        $entrevistaCompleta->save();

       return view('entrevistacompleta.index');

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
    public function edit($id, Request $request)
    {
        $filtros= Filtro2::findOrFail($id);
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
        $parentescos = parentesco::all();
        $eCivils= eCivil::all();
        $institucion1 = $request->get('institucion1');
        $fechap1 = $request->get('fecha1');
        $titulo1 = $request->get('titulo1');
        $estado1 = $request->get('estado1');
        $primaria = $institucion1. $fechap1. $titulo1. $estado1;

        $this->authorize('haveaccess','entrevistacompleta.edit');

        return view('entrevistacompleta.edit', compact('primaria','parentescos','eCivils','sMilitars','tViviendas','cargos','cargoEnt','filtros','departamento','residencia','adicional2es','adicionales','orientaciones','TipoVias','prefijos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntrevistaCompleta  $entrevistaCompleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEntrevista =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosEntrevista);
        $cargos = Cargo::all();
        $departamento = Departamentos::all();
        $TipoVias = TipoVia::all();
        $prefijos = Prefijo::all();
        $orientaciones = Orientacion::all();
        $adicionales = Adicional::all();
        $adicional2es = Adicional2::all();
        $filtros=Filtro2::findOrFail($id);
        $residencia = Residencia::all();
        $tViviendas = tVivienda::all();
        $sMilitars = sMilitar::all();
        $parentescos = parentesco::all();
        $eCivils= eCivil::all();
        //return response()->json($filtro);
        $this->authorize('haveaccess','entrevistacompleta.edit');
        return view('entrevistacompleta.edit', compact('eCivils','parentescos','sMilitars','tViviendas','residencia','adicional2es','adicionales','orientaciones','prefijos','TipoVias','filtros','datosEntrevista','cargos','departamento'));
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
