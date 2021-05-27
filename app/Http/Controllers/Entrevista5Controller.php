<?php

namespace App\Http\Controllers;

use App\entrevista5;
use Illuminate\Http\Request;
use App\Filtro;
use App\reclutamiento;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional2;
use App\Adicional;
use App\Entrevista3;
use App\Residencia;
use App\User;
use stdClass;
use App\entrevista4;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Entrevista5Export;

class Entrevista5Controller extends Controller
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
        $filtros = Entrevista4::orderBy('created_at', 'desc')->where('entvOK','=','entrevista 4 ok')
        ->paginate(20);
        return view('entrevista5.index',compact( 'filtros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrevista5 = Entrevista5::all();
        $reclutamientos=Reclutamiento::all();

        return view('entrevista5.create',compact('entrevistas5','reclutamientos'));
    }
    public function searchEntrevista5( Request $request)
    {
        $filtros = Entrevista5::all();
        $searchEntrevista = $request->get('searchEntrevista5');
        $filtros= Entrevista5::firstOrNew()
        ->where('cedula', 'like', '%'.$searchEntrevista.'%')
        ->paginate(5);
        return view('entrevista5.index', ['filtros' => $filtros]);
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
        $datosEntrevista=request()->except('_token');

        $request->validate([
            'cedula'          => 'required|unique:entrevista5s,cedula,',
        ]);
        $entrevista5s = new Entrevista5();
        $entrevista5s->id_filtro        = $request->id_filtro;
        $entrevista5s->cedula           = $request->cedula;
        $entrevista5s->nombres          = $request->nombres;
        $entrevista5s->telefono         = $request->telefono;
        $entrevista5s->correo           = $request->correo;
        $entrevista5s->aspiracion       = $request->aspiracion;
        $entrevista5s->personasC        = $request->personasC;
        $entrevista5s->acCambio         = $request->acCambio;
        $entrevista5s->tiempoDes        = $request->tiempoDes;
        $entrevista5s->queHizo          = $request->queHizo;
        $entrevista5s->otroProceso      = $request->otroProceso;
        $entrevista5s->CualOtra         = $request->CualOtra;
        $entrevista5s->fortalezas       = $request->fortalezas;
        $entrevista5s->debilidades      = $request->debilidades;
        $entrevista5s->valores          = $request->valores;
        $entrevista5s->satisfaccion    = $request->satisfaccion;
        $entrevista5s->traumaticos      = $request->traumaticos;
        $entrevista5s->cancelado        = $request->cancelado;
        $entrevista5s->motivoC          = $request->motivoC;
        $entrevista5s->problemas        = $request->problemas;
        $entrevista5s->motivoJ          = $request->motivoJ;
        $entrevista5s->fuma             = $request->fuma;
        $entrevista5s->frecuencia       = $request->frecuencia;
        $entrevista5s->deudas           = $request->deudas;
        $entrevista5s->debeA            = $request->debeA;
        $entrevista5s->cuantoDebe       = $request->cuantoDebe;
        $entrevista5s->plazo            = $request->plazo;
        $entrevista5s->grupoSoc         = $request->grupoSoc;
        $entrevista5s->cualGr           = $request->cualGr;
        $entrevista5s->cuantoTiempo     = $request->cuantoTiempo;
        $entrevista5s->tiempoLibre      = $request->tiempoLibre;
        $entrevista5s->estadoSalud      = $request->estadoSalud;
        $entrevista5s->tratamiento      = $request->tratamiento;
        $entrevista5s->accidentes       = $request->accidentes;
        $entrevista5s->cualAc           = $request->cualAc;
        $entrevista5s->procesosAnt      = $request->procesosAnt;
        $entrevista5s->familiaresMent   = $request->familiaresMent;
        $entrevista5s->entvOK           = $request->entvOK;
        $entrevista5s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrevista5  $entrevista5
     * @return \Illuminate\Http\Response
     */
    public function show(entrevista5 $entrevista5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevista5  $entrevista5
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $this->authorize('haveaccess','entrevista5.edit');
       $filtro=Entrevista4::findOrFail($id);

       return view('entrevista5.edit', compact('filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevista5  $entrevista5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosentrevista5 =request()->except(['_token','_method']);
        entrevista5::where('id_filtro','=',$id)->update($datosentrevista5);
        $entrevista5=entrevista5::findOrFail($id);
     //return response()->json($entrevista1);
     return view('entrevista5.edit', compact('entrevista5'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrevista5  $entrevista5
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entrevista5.destroy');
        Entrevista5::destroy($id);

        return redirect()->route('entrevista5.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new Entrevista5Export, 'entrevista5-list.xlsx');

}
}
