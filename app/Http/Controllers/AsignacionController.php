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
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = Contratacion::orderby('id', 'asc')->where('estado','=','activo')->paginate(10);
        $contatacion= Contratacion::all();
        return view('asignacion.index',compact('asignaciones','contatacion'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Asignacion $asignaciones)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $newEmployes = nuevoEmpleado::all();
        $datosnuevos=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosnuevos['Foto']=$request->file('Foto')->store('uploads','public');
        }
       /* $request->validate([
            'nombre'          => 'required|unique:filtros,nombre,',
        ]);*/

        $asignaciones = new Contratacion();

        $asignaciones->id_filtro             = $request->id_filtro;
        $asignaciones->cedula                = $request->cedula;
        $asignaciones->nombre               = $request->nombre;
        
       // $asignaciones->perfil                = $request->cargo;
       // $asignaciones->dependencia           = $request->dependencia;
       // $asignaciones->id_area               = $request->id_area;
        //$asignaciones->campaña               = $request->campaña;
        //$asignaciones->foco                  = $request->foco;
        //$asignaciones->jinmedato             = $request->jinmedato;
        //$asignaciones->observaciones         = $request->observaciones;
        $asignaciones->estado                = $request->estado;
        $asignaciones->save();
        //return back();
        return response()->json($asignaciones);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show(Asignacion $asignacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $this->authorize('haveaccess','asignacion.edit');
        $contatacion= Contratacion::findOrFail($id);
        $asignaciones = Asignacion::all();
        $cordinadores = Supervisor::all();
        $focos = Foco::all();
        $cargos= Cargo::all();
   
        $dependencias = Dependencia::all();
        $asignaciones = Asignacion::all();
       return view('asignacion.edit', compact('asignaciones','cordinadores','focos','contatacion','cargos','dependencias'));
      // return response()->json($asignaciones);

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
        $contatacion= Contratacion::findOrFail($id);
        $asignaciones = Asignacion::all();
        $cordinadores = Supervisor::all();
        $focos = Foco::all();
        $cargos= Cargo::all();
        $newEmployes = nuevoEmpleado::all();
        $dependencias = Dependencia::all();
        $datosAsignaciones =request()->except(['_token','_method', 'telefono']);
        Contratacion::where('id','=',$id)->update($datosAsignaciones);
        //$asigantion = Asignacion::all();
        $asignaciones=Asignacion::all();
    // return response()->json($asigantion);
     return view('asignacion.edit', compact('dependencias','newEmployes','cargos','focos','asignaciones','contatacion','cordinadores'));
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
