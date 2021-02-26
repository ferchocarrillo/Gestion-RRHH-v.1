<?php

namespace App\Http\Controllers;

use App\documento;
use Illuminate\Http\Request;
use App\Contratacion;
use App\Bancos;
use App\capacitacion;
use App\Filtro;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Entrevista1;


class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contratacions = Contratacion::orderBy('nombre', 'asc')->paginate(10);
        $contratacion2 = capacitacion::orderby('id', 'asc')->where('estado','=','Aprobado')->paginate(10);
        return view('documento.index',compact('contratacions','contratacion2'));
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
    public function store(Request $request, Documento $contratacions)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;

        $contratacions = new Contratacion();
        $contratacions->id_filtro        = $request->id_filtro;
        $contratacions->cedula           = $request->cedula;
        $contratacions->nombre           = $request->nombres;
        $contratacions->telefono         = $request->telefono;
        $contratacions->correo           = $request->correo;
        $contratacions->perfil           = $request->perfil;
        $contratacions->campaña          = $request->campaña;
        $contratacions->fuente           = $request->fuente;
        $contratacions->residencia       = $request->residencia;
        $contratacions->id_localidad     = $request->id_localidad;
        $contratacions->hv               = $request->hv;
        $contratacions->serv_publico     = $request->serv_publico;
        $contratacions->cert_bancaria    = $request->cert_bancaria;
        $contratacions->bancos           = $request->bancos;
        $contratacions->ex_medico        = $request->ex_medico;
        $contratacions->ant_procuraduria = $request->ant_procuraduria;
        $contratacions->ant_ponal        = $request->ant_ponal;
        $contratacions->copia_cedula     = $request->copia_cedula;
        $contratacions->cantidadcedula   = $request->cantidadcedula;
        $contratacions->libreta_militar  = $request->libreta_militar;
        $contratacions->cert_bachiller   = $request->cert_bachiller;
        $contratacions->cert_otros       = $request->cert_otros;
        $contratacions->cantidadcert     = $request->cantidadcert;
        $contratacions->ref_laborales    = $request->ref_laborales;
        $contratacions->cantidadlab      = $request->cantidadlab;
        $contratacions->ref_personales   = $request->ref_personales;
        $contratacions->cantidadper      = $request->cantidadper;
        $contratacions->cert_eps         = $request->cert_eps;
        $contratacions->cert_pensiones   = $request->cert_pensiones;
        $contratacions->cert_cesantias   = $request->cert_cesantias;
        $contratacions->nucleo_familiar  = $request->nucleo_familiar;
        $contratacions->documentos       = $request->documentos;
        $contratacions->observaciones    = $request->observaciones;
        $contratacions->estado           = $request->estado;
        $contratacions->save();
        //return response()->json($contratacions);
        return view('documento.edit', compact('contratacions', 'bancoses','contratacion2'));


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
        $this->authorize('haveaccess','contratacion.edit');
        $filtro = filtro::findOrFail($id);
        $contratacion2 = capacitacion::all();
        $bancoses = Bancos::all();
        $contratacions= entrevista1::findOrFail($id);
        $contrataciones= contratacion::findOrFail($id);
        return view('contratacion.edit', compact('filtro','contrataciones','contratacions', 'bancoses','contratacion2'));


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
        Contratacion::where('id','=',$id)->update($datosContratacion);
        $contratacions=Contratacion::findOrFail($id);

     //   return response()->json($contratacions);
     return view('documento.edit',compact('contratacions','bancoses'));
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
