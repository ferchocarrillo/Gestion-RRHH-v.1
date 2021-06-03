<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Campana;
use App\nuevoEmpleado;
use Illuminate\Http\Request;
use App\Capacitacion;
use App\Cesantias;
use App\Contratacion;
use App\Departamentos;
use App\Eps;
use App\Filtro2;
use App\Foco;
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
use App\Genero;
use App\rh;
use App\tipoDoc2;
use Carbon\Carbon;

class NuevoEmpleadoController extends Controller
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
        $filtros = Filtro2::orderby('created_at', 'desc')->where('estado','=','activo')->where('contratacionOK','=',NULL)->paginate(10);
        return view('nuevoempleado.index',compact('filtros'));
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
    public function store(Request $request )
    {
        {
            $date1   = Carbon::now();
            $date2   = $request->input('fnacimiento');
            $edad    = $date1->diffInYears($date2);

            $user_id = Auth::user()->id;
            $user_nombre = Auth::user()->name;
            $datosFiltro=request()->except('_token');

            if($request->hasFile('Foto')){
                $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
            }
           /* $request->validate([
                'cedula'          => 'required|unique:nuevoempleado,cedula,',


            ]);*/

            $filtro = new Filtro2();


            $filtro->tipoDoc                = $request->tipoDoc;
            $filtro->fexpe                  = $request->fexpe;
            $filtro->depNac                 = $request->departamento;
            $filtro->id_ciudad              = $request->id_ciudad;
            $filtro->telefono               = $request->telefono;
            $filtro->tFijo                  = $request->tFijo;
            $filtro->edad                   = $edad;
            $filtro->genero                 = $request->genero;
            $filtro->rh                     = $request->rh;
            $filtro->nivelEdu               = $request->nivelEdu;
            $filtro->correoCorp             = $request->correoCorp;
            $filtro->nombreContacto         = $request->nombreContacto;
            $filtro->parentesco             = $request->parentesco;
            $filtro->personaDireccion       = $request->personaDireccion;
            $filtro->contactoCelular        = $request->contactoCelular;
            $filtro->numHijos               = $request->numHijos;
            $filtro->hijosMAs               = $request->hijosMAs;
            $filtro->hijosFem               = $request->hijosFem;
            $filtro->Preexistencia          = $request->Preexistencia;
            $filtro->alergias               = $request->alergias;
            $filtro->medicamentos           = $request->medicamentos;
            $filtro->tpd1                   = $request->tpd1;
            $filtro->tpd2                   = $request->tpd2;
            $filtro->tpd3                   = $request->tpd3;
            $filtro->tpd4                   = $request->tpd4;
            $filtro->tpd5                   = $request->tpd5;
            $filtro->docfam1                = $request->docfam1;
            $filtro->docfam2                = $request->docfam2;
            $filtro->docfam3                = $request->docfam3;
            $filtro->docfam4                = $request->docfam4;
            $filtro->docfam5                = $request->docfam5;
            $filtro->ingreso                = $request->ingreso;
            $filtro->tipo_contratos         = $request->tipo_contratos;
            $filtro->supervisor             = $request->supervisor;
            $filtro->sede                   = $request->sede;
            $filtro->modalidad              = $request->modalidad;
            $filtro->tipoModalidad          = $request->tipoModalidad;
            $filtro->cesantias              = $request->cesantias;
            $filtro->pensiones              = $request->pensiones;
            $filtro->eps                    = $request->eps;
            $filtro->cajaComp               = $request->cajaComp;
            $filtro->ips                    = $request->ips;
            $filtro->arl                    = $request->arl;
            $filtro->Tcuenta                = $request->Tcuenta;
            $filtro->nCuenta                = $request->nCuenta;
            $filtro->bancos                 = $request->bancos;
            $filtro->estado                 = $request->estado;
            $filtro->contratacionOK         = $request->contratacionOK;



            $filtro->save();

               //return response()->json($nuevo);
            return back();
        }
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
    public function edit($id, Request $request)

    {
        $filtro = Filtro2::findOrFail($id);
        $date1   = Carbon::now();
        $date2   = $request->input('fnacimiento');
        $edad    = $date1->diffInYears($date2);
        $t_docs= tipoDoc2 ::all();
        $campanas = Campana::all();
        $departamento = Departamentos::all();
        $focos = Foco::all();
        $NivelEdus = nivelEdu::all();
        $parentescos = parentesco::all();
        $tipo_docs = tipoDoc::all();
        $tipo_contratoses= tipoContrato::all();
        $supervisores = Supervisor::all();
        $sedes = Sede::all();
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $cesantiases = Cesantias::all();
        $pensioneses = Pensiones::all();
        $epses = Eps::all();
        $cajaComps = cajaCompensacion::all();
        $generos = Genero::all();
        $tipo_rhs = rh::all();

       // return response()->json($nuevo);
        return view('nuevoempleado.edit', compact('edad', 'tipo_rhs','generos','t_docs','cajaComps','epses','pensioneses','cesantiases','tipoModalidades','modalidades','sedes','supervisores','tipo_contratoses','tipo_docs','parentescos','NivelEdus','filtro','focos','campanas', 'departamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $filtro = Filtro2::findOrFail($id);
        $date1   = Carbon::now();
        $date2   = $request->input('fnacimiento');
        $edad    = $date1->diffInYears($date2);
        $t_docs= tipoDoc2 ::all();
        $campanas = Campana::all();
        $departamento = Departamentos::all();
        $focos = Foco::all();
        $NivelEdus = nivelEdu::all();
        $parentescos = parentesco::all();
        $tipo_docs = tipoDoc::all();
        $tipo_contratoses= tipoContrato::all();
        $supervisores = Supervisor::all();
        $sedes = Sede::all();
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $cesantiases = Cesantias::all();
        $pensioneses = Pensiones::all();
        $epses = Eps::all();
        $cajaComps = cajaCompensacion::all();
        $generos = Genero::all();
        $tipo_rhs = rh::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro2::findOrFail($id);
//     return response()->json($datosFiltro);
     return view('nuevoempleado.edit', compact('edad', 'tipo_rhs','generos','t_docs','cajaComps','epses','pensioneses','cesantiases','tipoModalidades','modalidades','sedes','supervisores','tipo_contratoses','tipo_docs','parentescos','NivelEdus','filtro','focos','campanas', 'departamento'));
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


