<?php

namespace App\Http\Controllers;

use App\Entrevista1;
use App\entrevista2;
use App\Filtro;
use App\reclutamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional2;
use App\Adicional;
use App\Residencia;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Entrevista2Export;


class Entrevista2Controller extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrevistas = Filtro::orderBy('id', 'asc')->paginate(10);
        return view('entrevista2.index',compact( 'entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrevista2 = Entrevista2::all();
        $reclutamientos=Reclutamiento::all();

        return view('entrevista2.create',compact('entrevistas2','reclutamientos'));
    }

    public function searchEntrevista2( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $entrevistas2= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entrevista2.index', ['entrevistas2' => $entrevistas2]);
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
            'cedula'          => 'required|unique:entrevista2s,cedula,',
        ]);
        $entrevista2s = new Entrevista2();
        $entrevista2s->id_filtro        = $request->id_filtro;
        $entrevista2s->cedula           = $request->cedula;
        $entrevista2s->nombres          = $request->nombres;
        $entrevista2s->telefono         = $request->telefono;
        $entrevista2s->correo           = $request->correo;
        $entrevista2s->sinfamilia       = $request->sinfamilia;
        $entrevista2s->familiarp1       = $request->familiarp1;
        $entrevista2s->parentescop1     = $request->parentescop1;
        $entrevista2s->edadp1           = $request->edadp1;
        $entrevista2s->ocupacionp1      = $request->ocupacionp1;
        $entrevista2s->telefonop1       = $request->telefonop1;
        $entrevista2s->familiarp2       = $request->familiarp2;
        $entrevista2s->parentescop2     = $request->parentescop2;
        $entrevista2s->edadp2           = $request->edadp2;
        $entrevista2s->ocupacionp2      = $request->ocupacionp2;
        $entrevista2s->telefonop2       = $request->telefonop2;
        $entrevista2s->familiarp3       = $request->familiarp3;
        $entrevista2s->parentescop3     = $request->parentescop3;
        $entrevista2s->edadp3           = $request->edadp3;
        $entrevista2s->ocupacionp3      = $request->ocupacionp3;
        $entrevista2s->telefonop3       = $request->telefonop3;
        $entrevista2s->familiarp4       = $request->familiarp4;
        $entrevista2s->parentescop4     = $request->parentescop4;
        $entrevista2s->edadp4           = $request->edadp4;
        $entrevista2s->ocupacionp4      = $request->ocupacionp4;
        $entrevista2s->telefonop4       = $request->telefonop4;
        $entrevista2s->familiarp5       = $request->familiarp5;
        $entrevista2s->parentescop5     = $request->parentescop5;
        $entrevista2s->edadp5           = $request->edadp5;
        $entrevista2s->ocupacionp5      = $request->ocupacionp5;
        $entrevista2s->telefonop5       = $request->telefonop5;
        $entrevista2s->familiarp6       = $request->familiarp6;
        $entrevista2s->parentescop6     = $request->parentescop6;
        $entrevista2s->edadp6           = $request->edadp6;
        $entrevista2s->ocupacionp6      = $request->ocupacionp6;
        $entrevista2s->telefonop6       = $request->telefonop6;
        $entrevista2s->familiarp7       = $request->familiarp7;
        $entrevista2s->parentescop7     = $request->parentescop7;
        $entrevista2s->edadp7           = $request->edadp7;
        $entrevista2s->ocupacionp7      = $request->ocupacionp7;
        $entrevista2s->telefonop7       = $request->telefonop7;

        $entrevista2s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrevista2  $entrevista2
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevista2  $entrevista2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $this->authorize('haveaccess','entrevista2.edit');
       $filtro=Filtro::findOrFail($id);

       return view('entrevista2.edit', compact('filtro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevista2  $entrevista2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosentrevista2 =request()->except(['_token','_method']);
        entrevista2::where('id','=',$id)->update($datosentrevista2);
        $entrevista2=entrevista2::findOrFail($id);
     //return response()->json($entrevista1);
     return view('entrevista2.edit', compact('entrevista2'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrevista2  $entrevista2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entrevista2.destroy');
        Entrevista2::destroy($id);

        return redirect()->route('entrevista2.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new Entrevista2Export, 'entrevista2-list.xlsx');

}
}
