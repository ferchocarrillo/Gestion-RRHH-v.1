<?php

namespace App\Http\Controllers;

use App\Entrevista3;
use App\Entrevista2;
use App\Entrevista1;
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
use App\Exports\Entrevista3Export;

class Entrevista3Controller extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
        date_default_timezone_set('America/Bogota');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtros = Entrevista2::orderBy('created_at', 'desc')
        ->where('entvOK','=','entrevista 2 ok')
        ->paginate(20);
        return view('entrevista3.index',compact( 'filtros'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrevistas = Entrevista3::all();
        $reclutamientos=Reclutamiento::all();

        return view('entrevista3.create',compact('entrevistas','reclutamientos'));
    }

    public function searchEntrevista3( Request $request)
    {


        $searchEntrevista = $request->get('searchEntrevista3');
        $filtros= Entrevista2::firstOrNew()->where('cedula', 'like', '%'.$searchEntrevista.'%')->paginate(20);
        return view('entrevista3.index', ['filtros' => $filtros]);
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
            'cedula'          => 'required|unique:entrevista3s,cedula,',
        ]);
        $entrevista3s = new Entrevista3();
        $entrevista3s->id_filtro        = $request->id_filtro;
        $entrevista3s->cedula           = $request->cedula;
        $entrevista3s->nombres          = $request->nombres;
        $entrevista3s->telefono         = $request->telefono;
        $entrevista3s->correo           = $request->correo;
        $entrevista3s->Grado1           = $request->Grado1;
        $entrevista3s->institucion1     = $request->institucion1;
        $entrevista3s->años1            = $request->años1;
        $entrevista3s->fecha1           = $request->fecha1;
        $entrevista3s->titulo1          = $request->titulo1;
        $entrevista3s->estado1          = $request->estado1;
        $entrevista3s->Grado2           = $request->Grado2;
        $entrevista3s->institucion2     = $request->institucion2;
        $entrevista3s->años2            = $request->años2;
        $entrevista3s->fecha2           = $request->fecha2;
        $entrevista3s->titulo2          = $request->titulo2;
        $entrevista3s->estado2          = $request->estado2;
        $entrevista3s->Grado3           = $request->Grado3;
        $entrevista3s->institucion3     = $request->institucion3;
        $entrevista3s->años3            = $request->años3;
        $entrevista3s->fecha3           = $request->fecha3;
        $entrevista3s->titulo3          = $request->titulo3;
        $entrevista3s->estado3          = $request->estado3;
        $entrevista3s->Grado4           = $request->Grado4;
        $entrevista3s->institucion4     = $request->institucion4;
        $entrevista3s->años4            = $request->años4;
        $entrevista3s->fecha4           = $request->fecha4;
        $entrevista3s->titulo4          = $request->titulo4;
        $entrevista3s->estado4          = $request->estado4;
        $entrevista3s->Grado5           = $request->Grado5;
        $entrevista3s->institucion5     = $request->institucion5;
        $entrevista3s->años5            = $request->años5;
        $entrevista3s->fecha5           = $request->fecha5;
        $entrevista3s->titulo5          = $request->titulo5;
        $entrevista3s->estado5          = $request->estado5;
        $entrevista3s->Grado6           = $request->Grado6;
        $entrevista3s->institucion6     = $request->institucion6;
        $entrevista3s->años6            = $request->años6;
        $entrevista3s->fecha6           = $request->fecha6;
        $entrevista3s->titulo6          = $request->titulo6;
        $entrevista3s->estado6          = $request->estado6;
        $entrevista3s->Grado7           = $request->Grado7;
        $entrevista3s->institucion7     = $request->institucion7;
        $entrevista3s->años7            = $request->años7;
        $entrevista3s->fecha7           = $request->fecha7;
        $entrevista3s->titulo7          = $request->titulo7;
        $entrevista3s->estado7          = $request->estado7;
        $entrevista3s->Grado8           = $request->Grado8;
        $entrevista3s->institucion8     = $request->institucion8;
        $entrevista3s->años8            = $request->años8;
        $entrevista3s->fecha8           = $request->fecha8;
        $entrevista3s->titulo8          = $request->titulo8;
        $entrevista3s->estado8          = $request->estado8;
        $entrevista3s->entvOK           = $request->entvOK;
        $entrevista3s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrevista3  $entrevista3
     * @return \Illuminate\Http\Response
     */
    public function show(entrevista3 $entrevista3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevista3  $entrevista3
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('haveaccess','entrevista3.edit');
       $filtro= Entrevista1::findOrFail($id);

       return view('entrevista3.edit', compact('filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevista3  $entrevista3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosentrevista3 =request()->except(['_token','_method']);
        entrevista3::where('id_filtro','=',$id)->update($datosentrevista3);
        $entrevista3=entrevista3::findOrFail($id);
     //return response()->json($entrevista1);
     return view('entrevista3.edit', compact('entrevista3'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrevista3  $entrevista3
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','entrevista2.destroy');
        Entrevista3::destroy($id);

        return redirect()->route('entrevista3.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new Entrevista3Export, 'entrevista3-list.xlsx');

}
}
