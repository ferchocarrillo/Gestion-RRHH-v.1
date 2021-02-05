<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Filtro;
use App\JhonatanPermission\Models\Perfil;
use App\JhonatanPermission\Models\Reclutamiento;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PortaExport;


class FiltroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cargos = Cargo::all();
        $filtros = Filtro::orderBy('cedula', 'asc')->paginate(10);
        return view('filtro.index',compact('filtros','cargos'));
    }

    public function searchfiltro( Request $request)

    {
        $filtros = Filtro::all();

        $searchfiltro = $request->get('searchfiltro');
        $filtros= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchfiltro.'%')->paginate(5);
        return view('filtro.index', ['filtros' => $filtros]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filtros = Filtro::all();
        $cargos = Cargo::all();
        $reclutamientos = Reclutamiento::all();
        return view('filtro.create', compact('filtros','cargos'));
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
        $request->validate([
            'nombre'          => 'required|unique:filtros,nombre,',


        ]);

        $filtro = new Filtro();

        $filtro->fregistro              = $request->fregistro;
        $filtro->nombre                 = $request->nombre;
        $filtro->cedula                 = $request->cedula;
        $filtro->telefono               = $request->telefono;
        $filtro->correo                 = $request->correo;
        $filtro->perfil                 = $request->perfil;
        $filtro->campaña                = $request->campaña;
        $filtro->fuente                 = $request->fuente;
        $filtro->citadoE                = $request->citadoE;
        $filtro->noAplica               = $request->noAplica;
        $filtro->noInteresado           = $request->noInteresado;
        $filtro->enviadoCapa            = $request->enviadoCapa;
        $filtro->entrevistaJefeInm      = $request->entrevistaJefeInm;
        $filtro->entrevistaGerencia     = $request->entrevistaGerencia;
        $filtro->enviadocontratacion    = $request->enviadocontratacion;
        $filtro->enviadoExm             = $request->enviadoExm;
        $filtro->PruebasE               = $request->PruebasE;
        $filtro->yaTrabaja              = $request->yaTrabaja;
        $filtro->numeroEqu              = $request->numeroEqu;
        $filtro->observacion            = $request->observacion;
        $filtro->usuario                = $user_id.','.$user_nombre;
        $filtro->noAsiste               = $request->noAsiste;
        $filtro->NoResponde2            = $request->NoResponde2;
        $filtro->YaNoInt                = $request->YaNoInt;
        $filtro->Estudiante             = $request->Estudiante;
        $filtro->observacion2           = $request->observacion2;


        $filtro->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function show(Filtro $filtro)
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


        $filtro=Filtro::findOrFail($id);
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
        Filtro::where('id','=',$id)->update($datosFiltro);
        $filtro=Filtro::findOrFail($id);
     //return response()->json($filtro);
     return view('filtro.edit', compact('filtro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filtro  $filtro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filtro $filtro)
    {
        //
    }
}
