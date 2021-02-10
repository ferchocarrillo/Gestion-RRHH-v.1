<?php

namespace App\Http\Controllers;

use App\Filtro;
use App\reclutamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Departamentos;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Entrevista1;
use App\Adicional2;
use App\Adicional;
use App\Residencia;
use App\cargoEnt;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntrevistaExport;

class Entrevista1Controller extends Controller
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
        return view('entrevista1.index',compact( 'entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrevista = Entrevista1::all();
        $reclutamientos=Reclutamiento::all();

        return view('entrevista1.create',compact('entrevistas','reclutamientos'));
    }

    public function searchEntrevista( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista');
        $entrevistas= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
        return view('entrevista1.index', ['entrevistas' => $entrevistas]);
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
        $date1 = Carbon::now();
        $date2 = $request->input('fnacimiento');
        $edad = $date1->diffInYears($date2);

        $datosEntrevista=request()->except('_token');

        $request->validate([
            'cedula'          => 'required|unique:entrevista1s,cedula,',
        ]);
        $entrevista1s = new Entrevista1();

        $entrevista1s->id_filtro        = $request->id_filtro;
        $entrevista1s->cedula           = $request->cedula;
        $entrevista1s->nombres          = $request->nombres;
        $entrevista1s->telefono         = $request->telefono;
        $entrevista1s->correo           = $request->correo;
        $entrevista1s->cargo            = $request->cargo;
        $entrevista1s->referencia       = $request->referencia;
        $entrevista1s->fnacimiento      = $request->fnacimiento;
        $entrevista1s->departamento     = $request->departamento;
        $entrevista1s->id_ciudad        = $request->id_ciudad;
        $entrevista1s->edad             = $edad;
        $entrevista1s->TipoVia          = $request->TipoVia;
        $entrevista1s->dr1              = $request->dr1;
        $entrevista1s->prefijo1         = $request->prefijo1;
        $entrevista1s->dr2              = $request->dr2;
        $entrevista1s->prefijo2         = $request->prefijo2;
        $entrevista1s->dr3              = $request->dr3;
        $entrevista1s->orientacion      = $request->orientacion;
        $entrevista1s->adicional        = $request->adicional;
        $entrevista1s->ad1              = $request->ad1;
        $entrevista1s->adicional2       = $request->adicional2;
        $entrevista1s->ad2              = $request->ad2;
        $entrevista1s->adicional3       = $request->adicional3;
        $entrevista1s->ad3              = $request->ad3;
        $entrevista1s->barrio           = $request->barrio;
        $entrevista1s->residencia       = $request->residencia;
        $entrevista1s->id_localidad     = $request->id_localidad;
        $entrevista1s->tFijo            = $request->tFijo;
        $entrevista1s->tCelular         = $request->tCelular;
        $entrevista1s->tCelular2        = $request->tCelular2;
        $entrevista1s->tVivienda        = $request->tVivienda;
        $entrevista1s->valor            = $request->valor;
        $entrevista1s->arrendador       = $request->arrendador;
        $entrevista1s->correoArr        = $request->correoArr;
        $entrevista1s->sMilitar         = $request->sMilitar;
        $entrevista1s->donde            = $request->donde;
        $entrevista1s->eCivil           = $request->eCivil;
        $entrevista1s->cuanto           = $request->cuanto;
        $entrevista1s->quien            = $request->quien;
        $entrevista1s->conoce           = $request->conoce;



        $entrevista1s->save();

        return back();
        return view('entrevista2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrevista1  $entrevista1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevista1  $entrevista1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        
        $cargoEnt = CargoEnt::all();
        $departamento = Departamentos::all();
        $TipoVias = TipoVia::all();
        $prefijos = Prefijo::all();
        $orientaciones = Orientacion::all();
        $adicionales = Adicional::all();
        $adicional2es = Adicional2::all();
        $residencia = Residencia::all();
       $this->authorize('haveaccess','entrevista1.edit');
       $filtro=Filtro::findOrFail($id);

       return view('entrevista1.edit', compact('cargoEnt','filtro','departamento','residencia','adicional2es','adicionales','orientaciones','TipoVias','prefijos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevista1  $entrevista1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosentrevista1 =request()->except(['_token','_method']);
        entrevista1::where('id','=',$id)->update($datosentrevista1);
        $entrevista1=entrevista1::findOrFail($id);
     //return response()->json($entrevista1);
     return view('entrevista1.edit', compact('entrevista1'));
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entrevista1.destroy');
        Entrevista1::destroy($id);

        return redirect()->route('entrevista1.index')
            ->with('status_success','registro successfully removed');
    }


public function exportExcel()
{
return Excel::download(new EntrevistaExport, 'entrevista1-list.xlsx');

}



}
