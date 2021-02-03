<?php

namespace App\Http\Controllers;

use App\Campana;
use App\nuevoEmpleado;
use Illuminate\Http\Request;
use App\Capacitacion;
use App\Cesantias;
use App\Contratacion;
use App\Departamentos;
use App\Eps;
use App\Filtro;
use App\Foco;
use App\JhonatanPermission\Models\Entrevista1;
use App\JhonatanPermission\Models\Entrevista2;
use App\Modalidad;
use App\nivelEdu;
use App\parentesco;
use App\Pensiones;
use App\Sede;
use App\Supervisor;
use App\tipoContrato;
use App\tipoDoc;
use App\TipoModalidad;
use App\cajaCompensacion;

class NuevoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevos = Contratacion::orderby('id_filtro', 'asc')->where('estado','=','activo')->paginate(10);
        return view('nuevoempleado.index',compact('nuevos'));
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
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(nuevoEmpleado $nuevoEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id_filtro)

    {
        $filtro = Filtro::findOrFail($id_filtro);
        $campanas = Campana::all();
        $departamento = Departamentos::all();
        $nuevo = Entrevista1::findOrFail($id_filtro);
        $focos = Foco::all();
        $NivelEdus = nivelEdu::all();
        $parentescos = parentesco::all();
        $tipo_docs = tipoDoc::all();
        $nuevo2 = Entrevista2::findOrFail($id_filtro);
        $tipo_contratoses= tipoContrato::all();
        $supervisores = Supervisor::all();
        $sedes = Sede::all();
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $cesantiases = Cesantias::all();
        $pensioneses = Pensiones::all();
        $epses = Eps::all();
        $cajaComps = cajaCompensacion::all();
        $contratacion = Contratacion::findOrFail($id_filtro);


        return view('nuevoempleado.edit', compact('contratacion','cajaComps','epses','pensioneses','cesantiases','tipoModalidades','modalidades','sedes','supervisores','tipo_contratoses','tipo_docs','nuevo2','parentescos','NivelEdus','nuevo','filtro','focos','campanas', 'departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nuevoEmpleado $nuevoEmpleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(nuevoEmpleado $nuevoEmpleado)
    {
        //
    }
}
