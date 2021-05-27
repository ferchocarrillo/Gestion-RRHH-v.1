<?php

namespace App\Http\Controllers;

use App\Entrevista1;
use Illuminate\Support\Facades\Auth;
use App\Filtro;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Departamentos;
use App\JhonatanPermission\Models\Reclutamiento;
use App\TipoVia;
use App\Prefijo;
use App\Orientacion;
use App\Adicional;
use App\Adicional2;
use App\Residencia;

class EntrevistaController extends Controller
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
        $entrevistas = Entrevista1::all();
        $filtros = Filtro::all();
        $filtros = Filtro::orderBy('created_at', 'asc')->paginate(10);
        return view('entrevista.index',compact('entrevistas','filtros'));
    }



    public function searchfiltro( Request $request)

    {
        $filtros = Filtro::all();

        $searchfiltro = $request->get('searchfiltro');
        $filtros= Filtro::firstOrNew()->where('cedula', 'like', '%'.$searchfiltro.'%')->paginate(5);
        return view('entrevista.index', ['filtros' => $filtros]);
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

        return view('filtro.create',compact('entrevistas','reclutamientos'));
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
        $input1 =  Entrevista1::get('tipoVia');
        $input2 =  Entrevista1::get('dr1');
        $input3 =  Entrevista1::get('prefijo1');
        $input4 =  Entrevista1::get('dr2');
        $input5 =  Entrevista1::get('prefijo2');
        $input6 =  Entrevista1::get('dr3');
        $input7 =  Entrevista1::get('orientacion');
        $input8 =  Entrevista1::get('adicional');
        $input9 =  Entrevista1::get('ad1');
        $input10 = Entrevista1::get('adicional2');
        $input11 = Entrevista1::get('ad2');
        $input12 = Entrevista1::get('adicional3');
        $input13 = Entrevista1::get('ad3');

        $datosEntrevista=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosEntrevista['Foto']=$request->file('Foto')->store('uploads','public');
        }
        $entrevista = new Entrevista1();
        $entrevista->id_filtro        = $request->id_filtro;
        $entrevista->cedula           = $request->cedula;
        $entrevista->nombres          = $request->nombres;
        $entrevista->telefono         = $request->telefono;
        $entrevista->correo           = $request->correo;
        $entrevista->cargo            = $request->cargo;
        $entrevista->referencia       = $request->referencia;
        $entrevista->fnacimiento      = $request->fnacimiento;
        $entrevista->departamento     = $request->departamento;
        $entrevista->id_ciudad        = $request->id_ciudad;
        $entrevista->direccion        = $input1 .$input2 .$input3 .$input4 .$input5 .$input6 .$input7;
        $entrevista->adicionales      = $input8 .$input9 .$input10 .$input11 .$input12 .$input13;
        $entrevista->barrio           = $request->barrio;
        $entrevista->residencia       = $request->residencia;
        $entrevista->id_localidad     = $request->id_localidad;
        $entrevista->tFijo            = $request->tFijo;
        $entrevista->tCelular         = $request->tCelular;
        $entrevista->tCelular2        = $request->tCelular2;
        $entrevista->tVivienda        = $request->tVivienda;
        $entrevista->valor            = $request->valor;
        $entrevista->arrendador       = $request->arrendador;
        $entrevista->correoArr        = $request->correoArr;
        $entrevista->sMilitar         = $request->sMilitar;
        $entrevista->donde            = $request->donde;
        $entrevista->eCivil           = $request->eCivil;
        $entrevista->cuanto           = $request->cuanto;
        $entrevista->quien            = $request->quien;
        $entrevista->conoce           = $request->conoce;
        $entrevista->familiarp1       = $request->familiarp1;
        $entrevista->edadp1           = $request->edadp1;
        $entrevista->ocupacionp1      = $request->ocupacionp1;
        $entrevista->telefonop1       = $request->telefonop1;
        $entrevista->familiar2        = $request->familiar2;
        $entrevista->edadp2           = $request->edadp2;
        $entrevista->ocupacionp2      = $request->ocupacionp2;
        $entrevista->telefonop2       = $request->telefonop2;
        $entrevista->familiar3        = $request->familiar3;
        $entrevista->edadp3           = $request->edadp3;
        $entrevista->ocupacionp3      = $request->ocupacionp3;
        $entrevista->telefonop3       = $request->telefonop3;
        $entrevista->familiar4        = $request->familiar4;
        $entrevista->edadp4           = $request->edadp4;
        $entrevista->ocupacionp4      = $request->ocupacionp4;
        $entrevista->telefonop4       = $request->telefonop4;
        $entrevista->familiar5        = $request->familiar5;
        $entrevista->edadp5           = $request->edadp5;
        $entrevista->ocupacionp5      = $request->ocupacionp5;
        $entrevista->telefonop5       = $request->telefonop5;
        $entrevista->familiar6        = $request->familiar6;
        $entrevista->edadp6           = $request->edadp6;
        $entrevista->ocupacionp6      = $request->ocupacionp6;
        $entrevista->telefonop6       = $request->telefonop6;
        $entrevista->familiar7        = $request->familiar7;
        $entrevista->edadp7           = $request->edadp7;
        $entrevista->ocupacionp7      = $request->ocupacionp7;
        $entrevista->telefonop7       = $request->telefonop7;
        $entrevista->Grado1           = $request->Grado1;
        $entrevista->institucion1     = $request->institucion1;
        $entrevista->años1            = $request->años1;
        $entrevista->fecha1           = $request->fecha1;
        $entrevista->titulo1          = $request->titulo1;
        $entrevista->Grado2           = $request->Grado2;
        $entrevista->institucion2     = $request->institucion2;
        $entrevista->años2            = $request->años2;
        $entrevista->fecha2           = $request->fecha2;
        $entrevista->titulo2          = $request->titulo2;
        $entrevista->Grado3           = $request->Grado3;
        $entrevista->institucion3     = $request->institucion3;
        $entrevista->años3            = $request->años3;
        $entrevista->fecha3           = $request->fecha3;
        $entrevista->titulo3          = $request->titulo3;
        $entrevista->Grado4           = $request->Grado4;
        $entrevista->institucion4     = $request->institucion4;
        $entrevista->años4            = $request->años4;
        $entrevista->fecha4           = $request->fecha4;
        $entrevista->titulo4          = $request->titulo4;
        $entrevista->Grado5           = $request->Grado5;
        $entrevista->institucion5     = $request->institucion5;
        $entrevista->años5            = $request->años5;
        $entrevista->fecha5           = $request->fecha5;
        $entrevista->titulo5          = $request->titulo5;
        $entrevista->Grado6           = $request->Grado6;
        $entrevista->institucion6     = $request->institucion6;
        $entrevista->años6            = $request->años6;
        $entrevista->fecha6           = $request->fecha6;
        $entrevista->titulo6          = $request->titulo6;
        $entrevista->empresa1         = $request->empresa1;
        $entrevista->fechain1         = $request->fechain1;
        $entrevista->fechart1         = $request->fechart1;
        $entrevista->hlcargo1         = $request->hlcargo1;
        $entrevista->jefeinm1         = $request->jefeinm1;
        $entrevista->teleinf1         = $request->teleinf1;
        $entrevista->salarioh1        = $request->salarioh1;
        $entrevista->motivor1         = $request->motivor1;
        $entrevista->empresa2         = $request->empresa2;
        $entrevista->fechain2         = $request->fechain2;
        $entrevista->fechart2         = $request->fechart2;
        $entrevista->hlcargo2         = $request->hlcargo2;
        $entrevista->jefeinm2         = $request->jefeinm2;
        $entrevista->teleinf2         = $request->teleinf2;
        $entrevista->salarioh2        = $request->salarioh2;
        $entrevista->motivor2         = $request->motivor2;
        $entrevista->empresa3         = $request->empresa3;
        $entrevista->fechain3         = $request->fechain3;
        $entrevista->fechart3         = $request->fechart3;
        $entrevista->hlcargo3         = $request->hlcargo3;
        $entrevista->jefeinm3         = $request->jefeinm3;
        $entrevista->teleinf3         = $request->teleinf3;
        $entrevista->salarioh3        = $request->salarioh3;
        $entrevista->motivor3         = $request->motivor3;
        $entrevista->empresa4         = $request->empresa4;
        $entrevista->fechain4         = $request->fechain4;
        $entrevista->fechart4         = $request->fechart4;
        $entrevista->hlcargo4         = $request->hlcargo4;
        $entrevista->jefeinm4         = $request->jefeinm4;
        $entrevista->teleinf4         = $request->teleinf4;
        $entrevista->salarioh4        = $request->salarioh4;
        $entrevista->motivor4         = $request->motivor4;
        $entrevista->empresa5         = $request->empresa5;
        $entrevista->fechain5         = $request->fechain5;
        $entrevista->fechart5         = $request->fechart5;
        $entrevista->hlcargo5         = $request->hlcargo5;
        $entrevista->jefeinm5         = $request->jefeinm5;
        $entrevista->teleinf5         = $request->teleinf5;
        $entrevista->salarioh5        = $request->salarioh5;
        $entrevista->motivor5         = $request->motivor5;
        $entrevista->aspiracion       = $request->aspiracion;
        $entrevista->personasC        = $request->personasC;
        $entrevista->acCambio         = $request->acCambio;
        $entrevista->tiempoDes        = $request->tiempoDes;
        $entrevista->queHizo          = $request->queHizo;
        $entrevista->otroProceso      = $request->otroProceso;
        $entrevista->CualOtra         = $request->CualOtra;
        $entrevista->fortalezas       = $request->fortalezas;
        $entrevista->debilidades      = $request->debilidades;
        $entrevista->valores          = $request->valores;
        $entrevista->satisafaccion    = $request->satisafaccion;
        $entrevista->traumaticos      = $request->traumaticos;
        $entrevista->cancelado        = $request->cancelado;
        $entrevista->motivoC          = $request->motivoC;
        $entrevista->problemas        = $request->problemas;
        $entrevista->motivoJ          = $request->motivoJ;
        $entrevista->fuma             = $request->fuma;
        $entrevista->frecuencia       = $request->frecuencia;
        $entrevista->deudas           = $request->deudas;
        $entrevista->debeA            = $request->debeA;
        $entrevista->cuantoDebe       = $request->cuantoDebe;
        $entrevista->plazo            = $request->plazo;
        $entrevista->grupoSoc         = $request->grupoSoc;
        $entrevista->cualGr           = $request->cualGr;
        $entrevista->tiempo           = $request->tiempo;
        $entrevista->tiempoLibre      = $request->tiempoLibre;
        $entrevista->estadoSalud      = $request->estadoSalud;
        $entrevista->tratamiento      = $request->tratamiento;
        $entrevista->accidentes       = $request->accidentes;
        $entrevista->cualAc           = $request->cualAc;
        $entrevista->procesosAnt      = $request->procesosAnt;
        $entrevista->familiaresMent   = $request->familiaresMent;



        $entrevista->save();
        return response()->json($entrevista) ;


        /* return back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrevista  $entrevista
     * @return \Illuminate\Http\Response
     */
    public function show(Entrevista1 $entrevista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrevista  $entrevista
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        Carbon::setLocale('co');
        /*$today = Carbon::today()->toDateTimeString();
        $date1 = Carbon::createMidnightDate($today);
        $date2 = Carbon::createMidnightDate($today."+ 30 days");*/

        $date1 = Carbon::now();
        $date2 = $request->input('edad');
        $edad = $date1->diffInYears($date2);
        $TipoVias= TipoVia::all();
        $prefijos = Prefijo::all();
        $orientaciones = Orientacion::all();
        $adicionales = Adicional::all();
        $adicional2es = Adicional2::all();
        $departamento = Departamentos::all();
        $filtro = Filtro::findOrFail($id);
        $residencia = Residencia::all();

      /*  $now = Carbon::now();
        $dt = Carbon::createMidnightDate($today);*/
        return view('entrevista.edit', compact('residencia','adicional2es','adicionales','orientaciones','prefijos','TipoVias','date1','date2','edad','filtro', 'departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrevista  $entrevista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEntrevista =request()->except(['_token','_method']);
        Entrevista1::where('id','=',$id)->update($datosEntrevista);
        $entrevista=Entrevista1::findOrFail($id);
     //return response()->json($entrevista);
     return view('entrevista.edit', compact('Entrevista'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrevista  $entrevista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrevista1 $entrevista)
    {
        //
    }





}
