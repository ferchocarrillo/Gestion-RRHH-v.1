<?php

namespace App\Http\Controllers;

use App\contratacion;
use App\capacitacion;
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
use App\Bancos;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;
use App\Aprobacion;

class ContratacionController extends Controller
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
        $contratacions = filtro2::orderby('id', 'asc')->where('enviadocontratacion','=','X')->where('noContrat','=',NULL)->paginate(10);
        return view('contratacion.index',compact( 'contratacions'));
    }

    public function searchCon( Request $request)
    {
        $contratacions = contratacion::all();
        $searchCon = $request->get('searchCon');
        $contratacions = contratacion::firstOrNew()->where('cedula', 'like', '%'.$searchCon.'%')->paginate(10);

        return view('contratacion.index', ['contratacions' => $contratacions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contratacion = contratacion::all();



        return view('contratacion.create',compact('contratacion'));
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
        $datoscontratcion=request()->except('_token','_method');
        $request->validate([
            'cedula'          => 'required|unique:contratacions,cedula,',
        ]);
        $contratacion = new filtro2();

        $contratacion->hv               = $request->hv;
        $contratacion->serv_publico     = $request->serv_publico;
        $contratacion->cert_bancaria    = $request->cert_bancaria;
        $contratacion->bancos           = $request->bancos;
        $contratacion->ex_medico        = $request->ex_medico;
        $contratacion->ant_procuraduria = $request->ant_procuraduria;
        $contratacion->ant_ponal        = $request->ant_ponal;
        $contratacion->copia_cedula     = $request->copia_cedula;
        $contratacion->cantidadcedula   = $request->cantidadcedula;
        $contratacion->libreta_militar  = $request->libreta_militar;
        $contratacion->cert_bachiller   = $request->cert_bachiller;
        $contratacion->cert_otros       = $request->cert_otros;
        $contratacion->cantidadcert     = $request->cantidadcert;
        $contratacion->ref_laborales    = $request->ref_laborales;
        $contratacion->cantidadlab      = $request->cantidadlab;
        $contratacion->ref_personales   = $request->ref_personales;
        $contratacion->cantidadper      = $request->cantidadper;
        $contratacion->cert_eps         = $request->cert_eps;
        $contratacion->cert_pensiones   = $request->cert_pensiones;
        $contratacion->cert_cesantias   = $request->cert_cesantias;
        $contratacion->nucleo_familiar  = $request->nucleo_familiar;
        $contratacion->documentos       = $request->documentos;
        $contratacion->obscont          = $request->obscont;
        $contratacion->estado           = $request->estado;

        $contratacion->save();
      return back();


      // return response()->json($contratacion);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','contratacion.view');
        $contratacion=Contratacion::all();
        $filtro=Filtro2::all();
        return view('contratacion.view', compact('contratacion','filtro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        Carbon::setLocale('co');
        $date = Carbon::now();
        $bancoses = Bancos::all();
        $aprobaciones  = Aprobacion::all();
        $filtro=Filtro2::findOrFail($id);

        return view('contratacion.edit', compact('bancoses','filtro','date','aprobaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {

        Carbon::setLocale('co');
        $date = Carbon::now();
        $aprobaciones  = Aprobacion::all();
        $bancoses = Bancos::all();
        $datoscontratacion =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datoscontratacion);
        $filtro=Filtro2::findOrFail($id);
        //return response()->json($contratacion);
        return view('contratacion.edit', compact('filtro','date','aprobaciones','bancoses'));
}
}
