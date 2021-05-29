<?php

namespace App\Http\Controllers;

use App\Campana;
use App\Cargo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Filtro2;
use App\JhonatanPermission\Models\Perfil;
use App\JhonatanPermission\Models\Reclutamiento;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PortaExport;
use App\Fuente;
use Carbon\Carbon;

class FiltroController extends Controller
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

        $cargos = Cargo::all();
        $filtros = Filtro2::orderBy('updated_at', 'desc')->where('fechaRrhh', '=', NULL)->where('noAplica','<>','X')->where('estado','=',NULL)->paginate(20);
        return view('filtro.index',compact('filtros','cargos'));
    }

    public function searchfiltro( Request $request)

    {

        $filtros = Filtro2::all();
        $searchfiltro = $request->get('searchfiltro');
        $filtros= Filtro2::firstOrNew()->where('cedula', 'like', '%'.$searchfiltro.'%')->paginate(20);
        return view('filtro.index', ['filtros' => $filtros]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $campanas= Campana::all();
        $fuentes = Fuente::all();
        $cargos = Cargo::all();
        $reclutamientos = Reclutamiento::all();
        return view('filtro.create', compact('fuentes','campanas','cargos'));
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
        $datosFiltro=request()->except('_token');
        if($request->hasFile('Foto')){
            $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
        }
        // $request->validate([
        //     'nombre'          => 'required|unique:filtro,nombre,',


        // ]);

        $filtro = new Filtro2();

        $filtro->fregistro              = $request->fregistro;
        $filtro->nombre                 = $request->nombre;
        $filtro->cedula                 = $request->cedula;
        $filtro->telefono               = $request->telefono;
        $filtro->correo                 = $request->correo;
        $filtro->cargo                  = $request->cargo;
        $filtro->campaña                = $request->campana;
        $filtro->fuente                 = $request->fuente;
        $filtro->citadoE                = $request->citadoE;
        $filtro->noAplica               = $request->noAplica;
        $filtro->noInteresado           = $request->noInteresado;
        $filtro->enviadoCapa            = $request->enviadoCapa;
        $filtro->entrevistaJefeInm      = $request->entJe;
        $filtro->entrevistaGerencia     = $request->entGe;
        $filtro->enviadocontratacion    = $request->enviadocontratacion;
        $filtro->enviadoExm             = $request->enviadoExm;
        $filtro->PruebasE               = $request->PruebasE;
        $filtro->yaTrabaja              = $request->yaTrabaja;
        $filtro->numeroEqu              = $request->numeroEqu;
        $filtro->usuario                = $user_id.','.$user_nombre;
        $filtro->noAsisteEnt            = $request->noAsisteEnt;
        $filtro->NoResponde2            = $request->NoResponde2;
        $filtro->YaNoInt                = $request->YaNoInt;
        $filtro->Estudiante             = $request->Estudiante;

        $filtro->estado                 = $request->estado;
        $filtro->ingreso               = $request->ingreso;


        $filtro->save();

        //return response()->json($filtro);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function show(Filtro2 $filtro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filtro=Filtro2::findOrFail($id);
        return view('filtro.edit', compact('filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro2::findOrFail($id);
     //return response()->json($filtro);
     return view('filtro.edit', compact('filtro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filtro2 $filtro)
    {
        //
    }
}
