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
use App\resultadoRRHH;



class EntFinalizacionController extends Controller
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
        $entrevistas = Entrevista5::orderBy('created_at', 'desc')->where('entvOK','=','entrevista 5 ok')->paginate(20);

        return view('entFinalizacion.index',compact('entrevistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filtros = Filtro::all();
        $entrevista1s    = Entrevista1::all();;
        $entrevista2s    = Entrevista2::all();;
        $entrevista3s    = Entrevista3::all();;
        $entrevista4s    = Entrevista4::all();;
        $entrevista5s    = entrevista5::all();;
        $entFinalizaciones = EntFinalizacion::all();
        $resultados      = resultadoRRHH::all();
        return view('entFinalizacion.create',compact('entFinalizaciones','entrevista4s','entrevista3s','entrevista2s','entrevista5s','resultados','entrevista1s'));

    }


    public function searchEntFinalizacion( Request $request)
    {
        $searchEntrevista = $request->get('searchEntrevista');
        $searchEntFinalizacion= Entrevista5::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(5);
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
        //  $request->validate([
        //      'id'          => 'required|unique:EntFinalizacion,id_filtro,',
        //  ]);
        $entFinalizacion = new EntFinalizacion();
             $entFinalizacion->id_filtro        = $request->id_filtro;
             $entFinalizacion->cedula           = $request->cedula;
             $entFinalizacion->nombres           = $request->nombres;
             $entFinalizacion->resultado        = $request->resultado;
             $entFinalizacion->resultadoGer     = $request->resultadoGer;
             $entFinalizacion->obsGerencia      = $request->obsGerencia;
             $entFinalizacion->resultadoJefe    = $request->resultadoJefe;
             $entFinalizacion->obsjefe          = $request->obsjefe;

             $entFinalizacion->obsFinales       = $request->obsFinales;



        $entFinalizacion->save();
        //return response()->json($entFinalizacion);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntFinalizacion  $entFinalizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $this->authorize('haveaccess','entFinalizacion.edit');

        $entrevista5s= entrevista5::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista1s = Entrevista1::findOrFail($id);
        $entrevista2s = Entrevista2::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista3s = Entrevista3::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entrevista4s = Entrevista4::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        $entFinalizacion = EntFinalizacion::where('id_filtro', Filtro::findOrFail($id)->id)->first();
        // $entrevista5s = Entrevista5::findOrFail($id);
        $resultados   = resultadoRRHH::all();
        // $entGerencia=EntGerencia::all();

       return view('entfinalizacion.edit', compact('entFinalizacion','entrevista4s','entrevista3s','entrevista2s','entrevista5s','resultados','entrevista1s'));
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
        EntFinalizacion::where('id','=',$id)->update($datosentFinalizacion);

        $resultados  = resultadoRRHH::all();
    //return response()->json($entFinalizacion);
    return view('entfinalizacion.edit',compact( 'resultados'));
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
        EntFinalizacion::destroy($id);

        return redirect()->route('entFinalizacion.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new entFinalizacionExport, 'entFinalizacion-list.xlsx');

}
}
