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
use App\Genero;
use App\rh;
use App\tipoDoc2;

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



            $user_id = Auth::user()->id;
            $user_nombre = Auth::user()->name;

            $datosFiltro=request()->except('_token');

            if($request->hasFile('Foto')){
                $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
            }
           /* $request->validate([
                'cedula'          => 'required|unique:nuevoempleado,cedula,',


            ]);*/

            $nuevo = new nuevoEmpleado();

            $nuevo->id_filtro              = $request->id_filtro;
            $nuevo->nombres                = $request->nombre;
            $nuevo->tipo_doc2              = $request->tipoDoc;
            $nuevo->cedula                 = $request->cedula;
            $nuevo->fexpe                  = $request->fexpe;
            $nuevo->depNac                 = $request->departamento;
            $nuevo->id_ciudad              = $request->id_ciudad;
            $nuevo->correo                 = $request->correo;
            $nuevo->tCelular               = $request->tCelular;
            $nuevo->tFijo                  = $request->tFijo;
            $nuevo->eCivil                 = $request->eCivil;
            $nuevo->direccion              = $request->direccion;
            $nuevo->residencia             = $request->residencia;
            $nuevo->lugarNac               = $request->lugarNac;
            $nuevo->edad                   = $request->edad;
            $nuevo->genero                 = $request->genero;
            $nuevo->rh                     = $request->rh;
            $nuevo->nivelEdu               = $request->nivelEdu;
            $nuevo->cargo                  = $request->cargo;
            $nuevo->corporativo            = $request->corporativo;
            $nuevo->personaContacto        = $request->personaContacto;
            $nuevo->parentesco             = $request->parentesco;
            $nuevo->personaDireccion       = $request->personaDireccion;
            $nuevo->contactof              = $request->contactof;
            $nuevo->contactoCelular        = $request->contactoCelular;
            $nuevo->numHijos               = $request->numHijos;
            $nuevo->hijosMAs               = $request->hijosMAs;
            $nuevo->hijosFem               = $request->hijosFem;
            $nuevo->Preexistencia          = $request->Preexistencia;
            $nuevo->alergias               = $request->alergias;
            $nuevo->medicamentos           = $request->medicamentos;
            $nuevo->familiarp1             = $tpd1.','.$docfam1.','.$familiarp1.','.$parentescop1.','.$edadp1.','.$epsFam1.','.$caja1;
            $nuevo->familiarp2             = $tpd2.','.$docfam2.','.$familiarp2.','.$parentescop2.','.$edadp2.','.$epsFam2.','.$caja2;
            $nuevo->familiarp3             = $tpd3.','.$docfam3.','.$familiarp3.','.$parentescop3.','.$edadp3.','.$epsFam3.','.$caja3;
            $nuevo->familiarp4             = $tpd4.','.$docfam4.','.$familiarp4.','.$parentescop4.','.$edadp4.','.$epsFam4.','.$caja4;
            $nuevo->salario                = $request->salario;
            $nuevo->ingreso                = $request->ingreso;
            $nuevo->tipo_contratos         = $request->tipo_contratos;
            $nuevo->supervisor             = $request->supervisor;
            $nuevo->sede                   = $request->sede;
            $nuevo->modalidad              = $request->modalidad;
            $nuevo->tipoModalidad          = $request->tipoModalidad;
            $nuevo->cesantias              = $request->cesantias;
            $nuevo->pensiones              = $request->pensiones;
            $nuevo->eps                    = $request->eps;
            $nuevo->cajaComp               = $request->cajaComp;
            $nuevo->ips                    = $request->ips;
            $nuevo->arl                    = $request->arl;
            $nuevo->Tcuenta                = $request->Tcuenta;
            $nuevo->nCuenta                = $request->nCuenta;
            $nuevo->bancos                 = $request->bancos;
            $nuevo->estado                 = $request->estado;
            $nuevo->foco                   = $request->foco;
            $nuevo->campaña                = $request->campana;
            $nuevo->fuente                 = $request->fuente;
            $nuevo->usuario                = $user_id.','.$user_nombre;


            $nuevo->save();

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
    public function edit($id_filtro, Request $request)

    {
        $tipo_docs1 = $request->get('tipo_docs1');
        $docfam1 = $request->get('docfam1');
        $familiarp1 = $request->get('familiarp1');
        $parentescop1 = $request->get('parentescop1');
        $edadp1 = $request->get('edadp1');
        $epsFam1 = $request->get('epsFam1');
        $caja1 = $request->get('caja1');

        $tipo_docs2 = $request->tipo_docs2;
        $docfam2 = $request->docfam2;
        $familiarp2 = $request->familiarp2;
        $parentescop2 = $request->parentescop2;
        $edadp2 = $request->edadp2;
        $epsFam2 = $request->epsFam2;
        $caja2 = $request->caja2;

        $tipo_docs3 = $request->tipo_docs3;
        $docfam3 = $request->docfam3;
        $familiarp3 = $request->familiarp3;
        $parentescop3 = $request->parentescop3;
        $edadp3 = $request->edadp3;
        $epsFam3 = $request->epsFam3;
        $caja3 = $request->caja3;

        $tipo_docs4 = $request->tipo_docs4;
        $docfam4 = $request->docfam4;
        $familiarp4 = $request->familiarp4;
        $parentescop4 = $request->parentescop4;
        $edadp4 = $request->edadp4;
        $epsFam4 = $request->epsFam4;
        $caja4 = $request->caja4;


        $t_docs= tipoDoc2 ::all();
        $filtro = Filtro::findOrFail($id_filtro);
        $campanas = Campana::all();
        $departamento = Departamentos::all();
        $nuevos = Entrevista1::findOrFail($id_filtro);
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
        $nuevo = nuevoEmpleado::all();
        $generos = Genero::all();
        $tipo_rhs = rh::all();

       // return response()->json($nuevo);
        return view('nuevoempleado.edit', compact( 'tipo_rhs','generos','t_docs','nuevo','contratacion','cajaComps','epses','pensioneses','cesantiases','tipoModalidades','modalidades','sedes','supervisores','tipo_contratoses','tipo_docs','nuevo2','parentescos','NivelEdus','nuevos','filtro','focos','campanas', 'departamento'));

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
        $datosFiltro =request()->except(['_token','_method']);
        nuevoEmpleado::where('id','=',$id)->update($datosFiltro);
        $nuevo=nuevoEmpleado::findOrFail($id);
     return response()->json($datosFiltro);
     //return view('nuevoempleado.edit', compact('nuevo'));
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
