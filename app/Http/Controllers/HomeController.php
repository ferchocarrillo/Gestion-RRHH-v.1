<?php

namespace App\Http\Controllers;

use App\Capacitacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\JhonatanPermission\Models\Requisicion;
use App\Cargo;
use App\Sede;
use App\Dependencia;

use App\User;
use App\Reclutamiento;
use App\Filtro2;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

            Carbon::setLocale('co');
            date_default_timezone_set('America/Bogota');

    }



   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        $hoy = Carbon::now();
        $month = $hoy->format('m');
        $day   = $hoy->format('d');
        $year  = $hoy->format('Y');
        $date  = $hoy->format('Y-m-d');
        $estemes = $hoy->isCurrentMonth();
        $estedia = $hoy->isCurrentDay();


        $sede = Sede::all();
        $usuarios = User::all();
        $cargo = Cargo::all();
        $dependencia = Dependencia::all();
        $reclutamientos = Reclutamiento::all();
        $filtros = Filtro2::all();
        $capacitacion = Capacitacion::all();


      $requisiciones = Requisicion::orderBy('revisado', 'asc')->paginate(10);

      $pruebaRequises['requisicions'] = Requisicion::where('revisado','<>',NULL)->count();
      $countRequises ['requisicions'] = Requisicion::where('revisado', 'Aprobado')->count();
      $countRequi2ses['requisicions'] = Requisicion::where('revisado', 'Rechazado')->count();
      $countRequi3ses['requisicions'] = Requisicion::where('revisado', 'Pendiente')->count();
      $countRequi4ses['requisicions'] = Requisicion::where('revisado', null)->count();



$cargorequises = Requisicion::sum('cantidad');
collect($requisiciones)->sum('cantidad');


      $publicaciones = Reclutamiento::orderBy('created_at', 'asc')->paginate(10);
      $countpublicas  ['reclutamientos'] = Reclutamiento::where('vincuventas', 'vincuventas')->count();
      $count1publicas ['reclutamientos'] = Reclutamiento::where('computrabajo', 'computrabajo')->count();
      $count2publicas ['reclutamientos'] = Reclutamiento::where('sne', 'sne')->count();
      $count3publicas ['reclutamientos'] = Reclutamiento::where('compensar', 'compensar')->count();
      $count4publicas ['reclutamientos'] = Reclutamiento::where('rt', 'rt')->count();
      $count5publicas ['reclutamientos'] = Reclutamiento::where('rj', 'rj')->count();
      $count6publicas ['reclutamientos'] = Reclutamiento::where('rc', 'rc')->count();
      $count7publicas ['reclutamientos'] = Reclutamiento::where('univ', 'univ')->count();
      $count8publicas ['reclutamientos'] = Reclutamiento::where('redes', 'redes')->count();
      $count9publicas ['reclutamientos'] = Reclutamiento::where('hv', 'hv')->count();
      $count10publicas['reclutamientos'] = Reclutamiento::where('fundaciones', 'fundaciones')->count();
      $count11publicas['reclutamientos'] = Reclutamiento::where('otros', 'otros')->count();
      $count12publicas['reclutamientos'] = Reclutamiento::where('elEmpleo', 'El empleo')->count();
      $count13publicas['reclutamientos'] = Reclutamiento::where('Magneto', 'Magneto')->count();


      $filtros = Filtro2::orderBy('created_at', 'asc')->paginate(10);
      $countfiltros  ['filtros2'] = Filtro2::where('citadoE', 'X')->count();
      $count1filtros ['filtros2'] = Filtro2::where('noAplica', 'X')->count();
      $count2filtros ['filtros2'] = Filtro2::where('noInteresado', 'X')->count();
      $count3filtros ['filtros2'] = Filtro2::where('enviadoExm', 'X')->count();
      $count4filtros ['filtros2'] = Filtro2::where('pruebasE', 'X')->count();
      $count5filtros ['filtros2'] = Filtro2::where('yaTrabaja', 'X')->count();
      $count6filtros ['filtros2'] = Filtro2::where('numeroEqu', 'X')->count();
      $count7filtros ['filtros2'] = Filtro2::where('noResponde2', 'X')->count();
      $count8filtros ['filtros2'] = Filtro2::where('YaNoint', 'X')->count();
      $count9filtros ['filtros2'] = Filtro2::where('estudiante', 'X')->count();
      $count10filtros['filtros2'] = Filtro2::where('noAsiste', 'X')->count();
      $count11filtros['filtros2'] = Filtro2::where('noAsisteEnt', 'X')->count();
      $count12filtros['filtros2'] = Filtro2::where('enviadocontratacion', 'X')->count();
      $count13filtros['filtros2'] = Filtro2::where('noContrat', 'X')->count();
      $count14filtros['filtros2'] = Filtro2::where('enviadoCapa', 'X')->count();
      $count15filtros['filtros2'] = Filtro2::where('entrevistaJefeInm', 'X')->count();
      $count16filtros['filtros2'] = Filtro2::where('entrevistaGerencia', 'X')->count();

      $respuestarrhh1s['filtros'] = Filtro2::where('resultadoJefe', 'Aprobado')->count();
      $respuestarrhh2s['filtros'] = Filtro2::where('resultadoJefe', 'No Aprobado')->count();
      $respuestarrhh3s['filtros'] = Filtro2::where('resultadoGer', 'Aprobado')->count();
      $respuestarrhh4s['filtros'] = Filtro2::where('resultadoGer', 'No Aprobado')->count();


      $count00Fuentes['filtros2'] = Filtro2::where('fuente', 'Vincucuentas')->count();
      $count01Fuentes['filtros2'] = Filtro2::where('fuente', 'Computrabajo')->count();
      $count02Fuentes['filtros2'] = Filtro2::where('fuente', 'SNE')->count();
      $count03Fuentes['filtros2'] = Filtro2::where('fuente', 'Compensar')->count();
      $count04Fuentes['filtros2'] = Filtro2::where('fuente', 'rt')->count();
      $count05Fuentes['filtros2'] = Filtro2::where('fuente', 'rj')->count();
      $count06Fuentes['filtros2'] = Filtro2::where('fuente', 'rc')->count();
      $count07Fuentes['filtros2'] = Filtro2::where('fuente', 'univ')->count();
      $count08Fuentes['filtros2'] = Filtro2::where('fuente', 'redes')->count();
      $count09Fuentes['filtros2'] = Filtro2::where('fuente', 'hv')->count();
      $count10Fuentes['filtros2'] = Filtro2::where('fuente', 'funda')->count();
      $count11Fuentes['filtros2'] = Filtro2::where('fuente', 'otros')->count();

      $capacitacioneses  = Filtro2::orderBy('created_at', 'asc')->where('enviadoCapa','=','X')->paginate(10);

      $date1 = $request->input('created_at');
//    $date->('created_at')->isSameMonth(now());

      $capacitacionAps ['filtros']= Filtro2::where('resultadoFormacion','Aprobado')->count();
      $capacitacionNaps['filtros']= Filtro2::where('resultadoFormacion','No Aprobado')->count();

      $residencias= Filtro2::orderBy('fechaRrhh', 'asc')->where('fechaRrhh','<>',NULL)->paginate(10);
      $residencia1s['filtros']= Filtro2::where('residencia','Bogotá')->count();
      $residencia2s['filtros']= Filtro2::where('residencia','Aledaños')->count();

      $campañases = Filtro2::orderBy('campaña', 'asc')->where('estado','=','Activo')->paginate(10);
      $etbes ['filtros'] = Filtro2::where('campaña', 'ETB')->where('estado','=','Activo')->count();
      $movistares ['filtros'] = Filtro2::where('campaña', 'Movistar')->where('estado','=','Activo')->count();
      $qntes ['filtros'] = Filtro2::where('campaña', 'QNT')->where('estado','=','Activo')->count();
      $staffes ['filtros'] = Filtro2::where('campaña', 'Staff Mentius')->where('estado','=','Activo')->count();
      $vanties ['filtros'] = Filtro2::where('campaña', 'Vanti')->where('estado','=','Activo')->count();
      $vantisaces ['filtros'] = Filtro2::where('campaña', 'Vanti S A C')->where('estado','=','Activo')->count();



      $contratacionEnvs=Filtro2::orderBy('id', 'asc')->where('enviadocontratacion','=','X')->paginate(10);
      $noContratados['filtros']= Filtro2::where('noContrat','=','X')->count();
      $ContratacionOks['filtros']= Filtro2::where('contratacionOK','=','X')->count();

      return view('home' ,compact(
        'campañases',
        'etbes',
        'movistares',
        'qntes',
        'staffes',
        'vanties',
        'vantisaces',
        'respuestarrhh1s',
        'respuestarrhh2s',
        'respuestarrhh3s',
        'respuestarrhh4s',

        'capacitacioneses',
      'count11publicas',
      'count12publicas',
      'count13publicas',
      'count11Fuentes',
      'residencias',
      'residencia1s',
      'residencia2s',
      'capacitacionNaps',
      'capacitacionAps',
      'count00Fuentes',
      'count01Fuentes',
      'count02Fuentes',
      'count03Fuentes',
      'count04Fuentes',
      'count05Fuentes',
      'count06Fuentes',
      'count07Fuentes',
      'count08Fuentes',
      'count09Fuentes',
      'count10Fuentes',
      'filtros',
      'publicaciones',
      'requisiciones',
      'count16filtros',
      'count15filtros',
      'count14filtros',
      'count13filtros',
      'count12filtros',
      'count11filtros',
      'count10filtros',
      'count9filtros',
      'count8filtros',
      'count7filtros',
      'count6filtros',
      'count5filtros',
      'count4filtros',
      'count3filtros',
      'count2filtros',
      'count1filtros',
      'countfiltros',
      'cargorequises',
      'pruebaRequises',
      'count10publicas',
      'count9publicas',
      'count8publicas',
      'count7publicas',
      'count6publicas',
      'count5publicas',
      'count4publicas',
      'count3publicas',
      'count2publicas',
      'countpublicas',
      'count1publicas',
      'countRequises',
      'countRequi2ses',
      'countRequi3ses',
      'countRequi4ses',
      'usuarios',
      'cargo',
        'dependencia',
        'contratacionEnvs',
'noContratados',
'ContratacionOks',

    ));
    }


}
