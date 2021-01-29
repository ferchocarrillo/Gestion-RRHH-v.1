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
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReclutamientoExport;
use App\JhonatanPermission\Models\Reclutamiento;


class ReclutamientoController extends Controller
{
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


        $reclutamientos = Reclutamiento::orderBy('finicio', 'DESC')->paginate(4);
        return view('reclutamiento.index',compact('reclutamientos','usuarios','cargo','dependencia'));
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
        $dependencia = Dependencia::all();
        $reclutamientos = Reclutamiento::all();



       return view('reclutamiento.create',compact('cargo', 'sede', 'dependencia','reclutamientos'));
    }

    public function search( Request $request, Reclutamiento $reclutamientos)
    {
        $reclutamientos = Reclutamiento::all();

        $search = $request->get('search');

        $reclutamientos= Reclutamiento::firstOrNew()->where('finicio', 'like', '%'.$search.'%')->paginate(5);

        return view('reclutamiento.index', ['reclutamiento' => $reclutamientos]);
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

        $datosReclutamiento=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosReclutamiento['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $reclutamiento = new Reclutamiento();

        $reclutamiento->titulo       = $request->titulo;
        $reclutamiento->foco         = $request->foco;
        $reclutamiento->informacion  = $request->informacion;
        $reclutamiento->foto         = $request->Foto;
        $reclutamiento->tiempo       = $request->tiempo;
        $reclutamiento->finicio      = $request->finicio;
        $reclutamiento->vincuventas  = $request->vv;
        $reclutamiento->computrabajo = $request->ct;
        $reclutamiento->sne          = $request->sne;
        $reclutamiento->compensar    = $request->ccc;
        $reclutamiento->rt           = $request->rt;
        $reclutamiento->rj           = $request->rj;
        $reclutamiento->rc           = $request->rc;
        $reclutamiento->univ         = $request->univ;
        $reclutamiento->redes        = $request->redes;
        $reclutamiento->hv           = $request->hv;
        $reclutamiento->fundaciones  = $request->fundaciones;
        $reclutamiento->publica      = $user_id.','.$user_nombre;

        $reclutamiento->save();
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
        $reclutamientos= Reclutamiento::all();
        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencia = Dependencia::all();



        $reclutamientos=Reclutamiento::findOrFail($id);
        return view('reclutamiento.edit', compact('reclutamientos','sede', 'usuarios', 'cargo', 'dependencia'));


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
        $reclutamiento = Reclutamiento::all();

        $datosReclutamiento =request()->except(['_token','_method']);
        Reclutamiento::where('id','=',$id)->update($datosReclutamiento);
        $reclutamiento=Reclutamiento::findOrFail($id);
       // return response()->json($reclutamiento);
        return view('reclutamiento.edit', compact('reclutamiento','sede', 'usuarios', 'cargo', 'dependencia'));


    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','reclutamiento.destroy');
        Reclutamiento::destroy($id);

        return redirect()->route('reclutamiento.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new ReclutamientoExport, 'reclutamiento-list.xlsx');

}
}
