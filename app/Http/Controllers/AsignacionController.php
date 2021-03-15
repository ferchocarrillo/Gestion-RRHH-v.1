<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Asignacion;
use App\Cargo;
use App\Contratacion;
use App\Dependencia;
use App\Foco;
use App\Filtro;
use App\nuevoEmpleado;
use App\Supervisor;
use App\Campana;
use App\Sede;
use App\Modalidad;
use App\TipoModalidad;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AsignacionController extends Controller
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
        $asignaciones = nuevoEmpleado::orderby('id', 'asc')->where('estado','=','activo')->paginate(10);

        return view('asignacion.index',compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $filtros = Filtro::all();
        $cargos = Cargo::all();
        $newEmployes = nuevoEmpleado::all();
        return view('asignacion.index', compact('newEmployes','cargos','filtros','contatacion'));

    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request )
    {
        {
            $tpd1 = $request->get('tpd1');
            $docfam1 = $request->get('docfam1');
            $familiarp1 = $request->get('familiarp1');
            $parentescop1 = $request->get('parentescop1');
            $edadp1 = $request->get('edadp1');
            $epsFam1 = $request->get('epsFam1');
            $caja1 = $request->get('caja1');

            $tpd2 = $request->get('tpd2');
            $docfam2 = $request->get('docfam2');
            $familiarp2 = $request->get('familiarp2');
            $parentescop2 = $request->get('parentescop2');
            $edadp2 = $request->get('edadp2');
            $epsFam2 = $request->get('epsFam2');
            $caja2 = $request->get('caja2');

            $tpd3 = $request->get('tpd3');
            $docfam3 = $request->get('docfam3');
            $familiarp3 = $request->get('familiarp3');
            $parentescop3 = $request->get('parentescop3');
            $edadp3 = $request->get('edadp3');
            $epsFam3 = $request->get('epsFam3');
            $caja3 = $request->get('caja3');

            $tpd4 = $request->get('tpd4');
            $docfam4 = $request->get('docfam4');
            $familiarp4 = $request->get('familiarp4');
            $parentescop4 = $request->get('parentescop4');
            $edadp4 = $request->get('edadp4');
            $epsFam4 = $request->get('epsFam4');
            $caja4 = $request->get('caja4');


            $cargos= Cargo::all();
            $user_id = Auth::user()->id;
            $user_nombre = Auth::user()->name;

            $datosFiltro=request()->except('_token');

            if($request->hasFile('Foto')){
                $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
            }
            $request->validate([
                'cedula'          => 'required|unique:nuevoempleado,cedula,',


            ]);

            $contatacion = new nuevoEmpleado();

            $contatacion->id_filtro              = $request->id_filtro;
            $contatacion->nombres                = $request->nombres;
            $contatacion->tipoDoc              = $request->tipoDoc;
            $contatacion->cedula                 = $request->cedula;
            $contatacion->fexpe                  = $request->fexpe;
            $contatacion->depNac                 = $request->depNac;
            $contatacion->id_ciudad              = $request->id_ciudad;
            $contatacion->correo                 = $request->correo;
            $contatacion->tCelular               = $request->tCelular;
            $contatacion->tFijo                  = $request->tFijo;
            $contatacion->eCivil                 = $request->eCivil;
            $contatacion->direccion              = $request->direccion;
            $contatacion->residencia             = $request->residencia;
            $contatacion->lugarNac               = $request->lugarNac;
            $contatacion->edad                   = $request->edad;
            $contatacion->genero                 = $request->genero;
            $contatacion->rh                     = $request->rh;
            $contatacion->nivelEdu               = $request->nivelEdu;
            $contatacion->cargos                 = $request->cargos;
            $contatacion->corporativo            = $request->corporativo;
            $contatacion->personaContacto        = $request->personaContacto;
            $contatacion->parentesco             = $request->parentesco;
            $contatacion->personaDireccion       = $request->personaDireccion;
            $contatacion->contactof              = $request->contactof;
            $contatacion->contactoCelular        = $request->contactoCelular;
            $contatacion->numHijos               = $request->numHijos;
            $contatacion->hijosMAs               = $request->hijosMAs;
            $contatacion->hijosFem               = $request->hijosFem;
            $contatacion->Preexistencia          = $request->Preexistencia;
            $contatacion->alergias               = $request->alergias;
            $contatacion->medicamentos           = $request->medicamentos;
            $contatacion->familiarp1             = $tpd1.','.$docfam1.','.$familiarp1.','.$parentescop1.','.$edadp1.','.$epsFam1.','.$caja1;
            $contatacion->familiarp2             = $tpd2.','.$docfam2.','.$familiarp2.','.$parentescop2.','.$edadp2.','.$epsFam2.','.$caja2;
            $contatacion->familiarp3             = $tpd3.','.$docfam3.','.$familiarp3.','.$parentescop3.','.$edadp3.','.$epsFam3.','.$caja3;
            $contatacion->familiarp4             = $tpd4.','.$docfam4.','.$familiarp4.','.$parentescop4.','.$edadp4.','.$epsFam4.','.$caja4;
            $contatacion->salario                = $request->salario;
            $contatacion->ingreso                = $request->ingreso;
            $contatacion->tipo_contratos         = $request->tipo_contratos;
            $contatacion->supervisor             = $request->supervisor;
            $contatacion->sede                   = $request->sede;
            $contatacion->modalidad              = $request->modalidad;
            $contatacion->tipoModalidad          = $request->tipoModalidad;
            $contatacion->cesantias              = $request->cesantias;
            $contatacion->pensiones              = $request->pensiones;
            $contatacion->eps                    = $request->eps;
            $contatacion->cajaComp               = $request->cajaComp;
            $contatacion->ips                    = $request->ips;
            $contatacion->arl                    = $request->arl;
            $contatacion->Tcuenta                = $request->Tcuenta;
            $contatacion->nCuenta                = $request->nCuenta;
            $contatacion->bancos                 = $request->bancos;
            $contatacion->estado                 = $request->estado;
            $contatacion->foco                   = $request->foco;
            $contatacion->campaña                = $request->campaña;
            $contatacion->fuente                 = $request->fuente;

            $contatacion->usuario                = $user_id.','.$user_nombre;


            $contatacion->save();

               //return response()->json($nuevo);
            return back();
    //     return response()->json($contatacion);

   }
}


    public function edit($id)
    {

        $this->authorize('haveaccess','asignacion.edit');
        $contatacion= nuevoEmpleado::findOrFail($id);
        $asignaciones = Asignacion::all();
        $supervisores = Supervisor::all();
        $sedes = Sede::all();
        $focos = Foco::all();
        $cargos= Cargo::all();
        $campañas = Campana::all();
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $dependencias = Dependencia::all();
        $asignaciones = Asignacion::all();
       //return response()->json($contatacion);
    return view('asignacion.edit', compact('tipoModalidades','modalidades','sedes','campañas','cargos','asignaciones','supervisores','focos','contatacion','dependencias'));
      // return response()->json($asignaciones);s
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $sedes = Sede::all();
        $supervisores = Supervisor::all();
        $focos = Foco::all();
        $cargos = Cargo::all();
        $campañas = Campana::all();
        $datosFiltro =request()->except(['_token','_method']);
        nuevoEmpleado::where('id','=',$id)->update($datosFiltro);
        $contatacion= nuevoEmpleado::findOrFail($id);
     //return response()->json($contatacion);
     return view('asignacion.edit', compact('tipoModalidades','modalidades','contatacion','cargos','campañas','focos','supervisores','sedes'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacion $asignacion)
    {
        //
    }
}
