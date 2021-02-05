<?php

namespace App\Http\Controllers;

use App\EntGerencia;
use App\EntFinalizacion;
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
use App\Aprobacion;
use App\Entrevista1;
use App\Entrevista2;
use App\Entrevista3;
use App\Entrevista4;
use App\Entrevista5;
use App\Residencia;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntFinalizacionExport;
use Illuminate\Support\Facades\DB;

class EntGerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $entrevistas = EntFinalizacion::orderBy('id', 'asc')->where('resultado','cargo requiere segunda entrevista')->paginate(10);
        return view('entGerencia.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $entGerencia = EntGerencia::all();
        $entFinalizacion = EntFinalizacion::all();
        $reclutamientos=Reclutamiento::all();
        return view('entGerencia.create',compact('entGerencia','entFinalizacion','reclutamientos'));
    
    
    
    
    }


    public function searchEntGerencia( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $searchEntGerencia= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entGerencia.index', ['searchEntGerencia' => $searchEntGerencia]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, EntFinalizacion $entrevistas)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $datosEntrevista=request()->except('_token');
        $request->validate([
           'nombre'          => 'required|unique:entfinalizacion,nombre,',
         ]);

        $entrevistas = new EntFinalizacion();
        $entrevistas->id_filtro        = $request->id_filtro;
        $entrevistas->nombre           = $request->nombres;

        $entrevistas->cedula           = $request->cedula;
        $entrevistas->resultado        = $request->resultado;
        $entrevistas->fechaCont        = $request->fechaCont;
        $entrevistas->obsFinales       = $request->obsFinales;
        $entrevistas->resultadoGer     = $request->resultadoGer;
        $entrevistas->obsGerencia      = $request->obsGerencia;

        $entrevistas->save();
        //return back();
       //return response()->json($entGerencia);

        //$entrevistas->update($request->all());
        //return redirect()->route('entFinalizacion.index')
        //->with('status_success','EntFinalizacion updated successfully');
        return response()->json($entrevistas);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entFinalizacion  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $this->authorize('haveaccess','entGerencia.edit');
       
        /*$filtro=Filtro::findOrFail($id);
        $entrevista1s=entrevista1::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion=entFinalizacion::where('id_filtro', Filtro::findOrFail($id)->id)->first();
       /* $entGerencia=entGerencia::all();*/
        $entrevista1s= Entrevista1::findOrFail($id);
        $entrevista2s= Entrevista2::findOrFail($id);
        $entrevista3s= Entrevista3::findOrFail($id);
        $entrevista4s= Entrevista4::findOrFail($id);
        $entrevista5s= Entrevista5::findOrFail($id);
        $entFinalizacion=entFinalizacion::findOrFail($id);
        $aprobaciones = Aprobacion::all();

        $filtro=Filtro::findOrFail($id);
       return view('entGerencia.edit', compact('aprobaciones','filtro','entrevista1s','entrevista2s','entrevista3s','entFinalizacion','entrevista4s','entrevista5s'));

      // return view('entGerencia.edit', compact('aprobaciones','entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s','filtro'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosFiltro =request()->except(['_token','_method']);
        EntFinalizacion::where('id','=',$id)->update($datosFiltro);
        $filtro=EntFinalizacion::findOrFail($id);
     return response()->json($filtro);
     //return view('entGerencia.edit', compact('filtro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntGerencia  $entGerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntGerencia $entGerencia)
    {
        //
    }


}
