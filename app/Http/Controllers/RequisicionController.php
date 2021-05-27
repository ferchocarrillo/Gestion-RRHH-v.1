<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Cargo;
use App\Sede;
use App\Dependencia;
use App\User;
use stdClass;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\requisicionExport;
use App\Requisicion;
use Carbon\Carbon;

class RequisicionController extends Controller
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
        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencia = Dependencia::all();
        $requisiciones= Requisicion::all();
        $requisiciones= Requisicion::orderBy('revisado', 'asc')->paginate(10);


      $countRequises    ['requisicions'] = Requisicion::where('revisado', 'Aprobado')->count();
      $countRequi2ses   ['requisicions'] = Requisicion::where('revisado', 'Rechazado')->count();
      $countRequi3ses   ['requisicions'] = Requisicion::where('revisado', 'Pendiente')->count();
      $countRequi4ses   ['requisicions'] = Requisicion::where('revisado',  Null)->count();


        return view('requisicion.index',compact('requisiciones','countRequises', 'countRequi2ses','countRequi3ses','countRequi4ses','usuarios','cargo','dependencia'));
    }



    public function searchRequisicion( Request $request)
    {
        $requisiciones= Requisicion::all();

        $searchRequisicion = $request->get('searchRequisicion');
        $countRequises    ['requisicions'] = Requisicion::where('revisado', 'Aprobado')->count();
        $countRequi2ses   ['requisicions'] = Requisicion::where('revisado', 'Rechazado')->count();
        $countRequi3ses   ['requisicions'] = Requisicion::where('revisado', 'Pendiente')->count();
        $countRequi4ses   ['requisicions'] = Requisicion::where('revisado',  Null)->count();

        $requisiciones= Requisicion::firstOrNew()->where('id', 'like', '%'.$searchRequisicion.'%')->paginate(10);

        return view('requisicion.index', ['requisiciones' => $requisiciones], compact('countRequises', 'countRequi2ses','countRequi3ses','countRequi4ses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencias = Dependencia::all();



       return view('requisicion.create',compact('cargo', 'sede', 'dependencias'));
    }

    public function search( Request $request)
    {
        $requisiciones = Requisicion::all();
        $search = $request->get('search');
        $requisiciones= Requisicion::firstOrNew()->where('id', 'like', '%'.$search.'%')->paginate(5);
        return view('requisicion.index', ['requisiciones' => $requisiciones]);



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

        $requisicion = new Requisicion();

        $requisicion->cargo             = $request->cargos;
        $requisicion->cantidad          = $request->cantidad;
        $requisicion->sede              = $request->sede;
        $requisicion->dependencias      = $request->dependencia;
        $requisicion->area              = $request->id_area;
        $requisicion->motivos           = $request->motivos;
        $requisicion->reemplaza         = $request->reemplaza;
        $requisicion->cual              = $request->cual;
        $requisicion->tiempo            = $request->tiempo;
        $requisicion->dias              = $request->dias;
        $requisicion->jornada           = $request->jornada;
        $requisicion->finicio           = $request->finicio;
        $requisicion->solicita          = $user_id.','.$user_nombre;
        $requisicion->revisado          = $request->revisado;
        $requisicion->observaciones     = $request->observaciones;
        $requisicion->edad              = $request->edad;
        $requisicion->profesion         = $request->profesion;
        $requisicion->orientacion       = $request->orientacion;
        $requisicion->raza              = $request->raza;
        $requisicion->culto             = $request->culto;
        $requisicion->imposibilita      = $request->imposibilita;
        $requisicion->sexo              = $request->sexo;
        $requisicion->disfisica         = $request->disfisica;
        $requisicion->dismental         = $request->dismental;
        $requisicion->nacionalidad      = $request->nacionalidad;
        $requisicion->save();
        //return response()->json($requisicion);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisicion= Requisicion::all();
        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencia = Dependencia::all();



        $requisicion=Requisicion::findOrFail($id);
        return view('requisicion.edit', compact('requisicion','sede', 'usuarios', 'cargo', 'dependencia'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencia = Dependencia::all();
        $requisicion = Requisicion::all();

        $datosRequisicion =request()->except(['_token','_method']);
        Requisicion::where('id','=',$id)->update($datosRequisicion);
        $requisicion=Requisicion::findOrFail($id);
       // return response()->json($requisicion);
        return view('requisicion.edit', compact('requisicion','sede', 'usuarios', 'cargo', 'dependencia'));


    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','requisicion.destroy');
        Requisicion::destroy($id);

        return redirect()->route('requisicion.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new RequisicionExport, 'requisicion-list.xlsx');

}
}
