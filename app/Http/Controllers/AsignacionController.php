<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Asignacion;
use App\Cargo;

use App\Dependencia;
use App\Foco;
use App\Filtro2;
use App\Supervisor;
use App\Campana;
use App\Sede;
use App\Modalidad;
use App\TipoModalidad;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AsignacionController extends Controller
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
        $filtros = Filtro2::orderby('id', 'asc')->where('estado','=','activo')->paginate(10);

        return view('asignacion.index',compact('filtros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $filtro = Filtro2::all();
        $cargos = Cargo::all();
        return view('asignacion.index', compact('newEmployes','cargos','filtro','contatacion'));

    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request )
    {
        {




            $cargos= Cargo::all();
            $user_id = Auth::user()->id;
            $user_nombre = Auth::user()->name;



            $datosFiltro=request()->except('_token');

            if($request->hasFile('Foto')){
                $datosFiltro['Foto']=$request->file('Foto')->store('uploads','public');
            }
            $request->validate([
                'cedula'          => 'required|unique:nuevoempleado,cedula,',


            ]);




            $filtro = new filtro2();

            $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
            $date9 = $filtro->fnacimiento;
            $edad = $carbon1->floatDiffInYears($date9);
            $edad = number_format($edad,1,'.',',');


            $filtro->cargo                  = $request->cargo;
            $filtro->foco                   = $request->foco;
            $filtro->campaña                = $request->campaña;
            $filtro->fuente                 = $request->fuente;
            $filtro->supervisor             = $request->supervisor;
            $filtro->sede                   = $request->sede;
            $filtro->modalidad              = $request->modalidad;
            $filtro->tipoModalidad          = $request->tipoModalidad;
            $filtro->edad                   = $request->edad;

            $filtro->save();

               return response()->json($filtro);
            //return back();
    //     return response()->json($contatacion);

   }
}


    public function edit(Request $request, $id)
    {

        $this->authorize('haveaccess','asignacion.edit');
        $filtro= Filtro2::findOrFail($id);
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $date9 = $filtro->fnacimiento;
        $edad = $carbon1->floatDiffInYears($date9);
        $edad = number_format($edad,1,'.',',');



        $supervisores = Supervisor::all();
        $sedes = Sede::all();
        $focos = Foco::all();
        $cargos= Cargo::all();
        $campañas = Campana::all();
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $dependencias = Dependencia::all();
       //return response()->json($contatacion);
    return view('asignacion.edit', compact('edad','filtro','tipoModalidades','modalidades','sedes','campañas','cargos','supervisores','focos','dependencias'));

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
        $filtro= Filtro2::findOrFail($id);
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $date9 = $filtro->fnacimiento;
        $edad = $carbon1->floatDiffInYears($date9);
        $edad = number_format($edad,1,'.',',');
        $modalidades = Modalidad::all();
        $tipoModalidades = TipoModalidad::all();
        $sedes = Sede::all();
        $supervisores = Supervisor::all();
        $focos = Foco::all();
        $cargos = Cargo::all();
        $campañas = Campana::all();
        $datosFiltro =request()->except(['_token','_method']);
        Filtro2::where('id','=',$id)->update($datosFiltro);
        $filtro= Filtro2::findOrFail($id);
     //return response()->json($filtros);
     return view('asignacion.edit', compact('edad','filtro','tipoModalidades','modalidades','cargos','campañas','focos','supervisores','sedes'));


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
