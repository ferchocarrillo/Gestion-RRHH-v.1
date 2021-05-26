<?php

namespace App\Http\Controllers;

use App\documento;
use Illuminate\Http\Request;
use App\Contratacion;
use App\Bancos;
use App\capacitacion;
use App\Filtro2;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Entrevista1;


class DocumentoController extends Controller
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

        // $contratacions = Contratacion::orderBy('nombre', 'asc')->paginate(10);
        $filtros = Filtro2::orderby('id', 'asc')->where('enviadocontratacion','=','X')->where('noContrat','=',NULL)->where('estado','=','activo')->paginate(10);
        return view('documento.index',compact('filtros'));
    }


    public function searchDocumento( Request $request)

    {
        $contratacions = Contratacion::all();

        $searchDocumento = $request->get('searchDocumento');
        $contratacions= Contratacion::firstOrNew()->where('cedula', 'like', '%'.$searchDocumento.'%')->paginate(5);
        return view('documento.index', ['contratacions' => $contratacions]);
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

        $filtro = new Filtros();
        $filtro->id_filtro        = $request->id_filtro;
        $filtro->cedula           = $request->cedula;
        $filtro->nombre           = $request->nombres;
        $filtro->telefono         = $request->telefono;
        $filtro->correo           = $request->correo;
        $filtro->cargos           = $request->cargos;
        $filtro->campaña          = $request->campaña;
        $filtro->fuente           = $request->fuente;
        $filtro->residencia       = $request->residencia;
        $filtro->id_localidad     = $request->id_localidad;
        $filtro->hv               = $request->hv;
        $filtro->serv_publico     = $request->serv_publico;
        $filtro->cert_bancaria    = $request->cert_bancaria;
        $filtro->bancos           = $request->bancos;
        $filtro->ex_medico        = $request->ex_medico;
        $filtro->ant_procuraduria = $request->ant_procuraduria;
        $filtro->ant_ponal        = $request->ant_ponal;
        $filtro->copia_cedula     = $request->copia_cedula;
        $filtro->cantidadcedula   = $request->cantidadcedula;
        $filtro->libreta_militar  = $request->libreta_militar;
        $filtro->cert_bachiller   = $request->cert_bachiller;
        $filtro->cert_otros       = $request->cert_otros;
        $filtro->cantidadcert     = $request->cantidadcert;
        $filtro->ref_laborales    = $request->ref_laborales;
        $filtro->cantidadlab      = $request->cantidadlab;
        $filtro->ref_personales   = $request->ref_personales;
        $filtro->cantidadper      = $request->cantidadper;
        $filtro->cert_eps         = $request->cert_eps;
        $filtro->cert_pensiones   = $request->cert_pensiones;
        $filtro->cert_cesantias   = $request->cert_cesantias;
        $filtro->nucleo_familiar  = $request->nucleo_familiar;
        $filtro->documentos       = $request->documentos;
        $filtro->obscont          = $request->obscont;
        $filtro->estado           = $request->estado;
        $filtro->save();
        //return response()->json($contratacions);
        return view('documento.edit', compact('filtro', 'bancoses'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        Carbon::setLocale('es');
        $date = Carbon::now();
        $bancoses = Bancos::all();
        $this->authorize('haveaccess','documento.edit');
        $filtro= Filtro2::findOrFail($id);


        return view('documento.edit', compact('filtro', 'bancoses'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $bancoses = Bancos::all();
        $datosContratacion=request()->except(['_token','_method']);
        filtro2::where('id','=',$id)->update($datosContratacion);
        $filtro=filtro2::findOrFail($id);

     //   return response()->json($contratacions);
     return view('documento.edit',compact('filtro','bancoses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(documento $documento)
    {
        //
    }
}
