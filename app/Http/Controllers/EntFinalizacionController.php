<?php

namespace App\Http\Controllers;

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
use App\EntGerencia;
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



class EntFinalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   

        $entrevistas = Entrevista5::orderBy('id', 'asc')->where('entvOK','=','entrevista 5 ok')->paginate(20);

        return view('entFinalizacion.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        
        $entrevista1s=entrevista1::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion = EntFinalizacion::all();
        //$reclutamientos=Reclutamiento::all();


        return view('entFinalizacion.create',compact('entFinalizacion','entrevista5s','entrevista4s','entrevista3s','entrevista2s', 'entrevista1s'));
    }


    public function searchEntFinalizacion( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $searchEntFinalizacion= entrevista5::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entFinalizacion.index', ['searchEntFinalizacion' => $searchEntFinalizacion]);
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
            'cedula'          => 'required|unique:entfinalizacion,cedula,',
        ]);
        $entFinalizacion = new EntFinalizacion();
             $entFinalizacion->id_filtro        = $request->id_filtro;
             $entFinalizacion->cedula           = $request->cedula;
             $entFinalizacion->nombre           = $request->nombre;
             $entFinalizacion->resultado        = $request->resultado;
             $entFinalizacion->resultadoGer     = $request->resultadoGer;
             $entFinalizacion->obsGerencia      = $request->obsGerencia;
             $entFinalizacion->resultadoJefe    = $request->resultadoJefe;
             $entFinalizacion->obsjefe          = $request->obsjefe;           
             $entFinalizacion->fechaCont        = $request->fechaCont;
             $entFinalizacion->obsFinales       = $request->obsFinales;



        $entFinalizacion->save();
       return response()->json($entFinalizacion);
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->authorize('haveaccess','entFinalizacion.edit');
        $entrevista1s=Entrevista1::all();
       
        return view('entFinalizacion.edit', compact('entrevista1s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)

    {
        $this->authorize('haveaccess','entFinalizacion.edit');

 
     
        $entrevista1s=entrevista1::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista2s=Entrevista2::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista3s=Entrevista3::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista4s=Entrevista4::where('id', Filtro::findOrFail($id)->id)->first();
        $entrevista5s=Entrevista5::where('id', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion=entFinalizacion::all();
        $entGerencia=EntGerencia::all();

       return view('entFinalizacion.edit', compact('entGerencia','entFinalizacion','entrevista1s','entrevista5s','entrevista4s','entrevista3s','entrevista2s'));
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
        $datosentFinalizacion =request()->except(['_token','_method']);
        filtro::where('id','=',$id)->update($datosentFinalizacion);
        $entFinalizacion=filtro::findOrFail($id);
    return response()->json($entFinalizacion);
     //return view('entFinalizacion.edit', compact('entFinalizacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entFinalizacion.destroy');
        entFinalizacion::destroy($id);

        return redirect()->route('entFinalizacion.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new entFinalizacionExport, 'entFinalizacion-list.xlsx');

}
}
