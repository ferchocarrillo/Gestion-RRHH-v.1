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
use App\Entrevista1;
use App\User;
use App\Reclutamiento;
use App\Filtro;

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
        $reclutamientos = Reclutamiento::all();
        $filtros = Filtro::all();
        $capacitacion = Capacitacion::all();
        $entrevistas = Entrevista1::all();

      $requisiciones = Requisicion::orderBy('revisado', 'asc')->paginate(10);

      $pruebaRequises['requisicions'] = Requisicion::where('revisado','<>',null)->count();
      $countRequises['requisicions'] = Requisicion::where('revisado', 'Aprobado')->count();
      $countRequi2ses['requisicions'] = Requisicion::where('revisado', 'Rechazado')->count();
      $countRequi3ses['requisicions'] = Requisicion::where('revisado', 'Pendiente')->count();
      $countRequi4ses['requisicions'] = Requisicion::where('revisado', null)->count();

      $publicaciones = Reclutamiento::orderBy('created_at', 'asc')->paginate(10);
      $countpublicas['reclutamientos'] = Reclutamiento::where('vincuventas', 'vincuventas')->count();
      $count1publicas['reclutamientos'] = Reclutamiento::where('computrabajo', 'computrabajo')->count();
      $count2publicas['reclutamientos'] = Reclutamiento::where('sne', 'sne')->count();
      $count3publicas['reclutamientos'] = Reclutamiento::where('compensar', 'compensar')->count();
      $count4publicas['reclutamientos'] = Reclutamiento::where('rt', 'rt')->count();
      $count5publicas['reclutamientos'] = Reclutamiento::where('rj', 'rj')->count();
      $count6publicas['reclutamientos'] = Reclutamiento::where('rc', 'rc')->count();
      $count7publicas['reclutamientos'] = Reclutamiento::where('univ', 'univ')->count();
      $count8publicas['reclutamientos'] = Reclutamiento::where('redes', 'redes')->count();
      $count9publicas['reclutamientos'] = Reclutamiento::where('hv', 'hv')->count();
      $count10publicas['reclutamientos'] = Reclutamiento::where('fundaciones', 'fundaciones')->count();


      $filtros = Filtro::orderBy('created_at', 'asc')->paginate(10);
      $countfiltros['filtros']   = Filtro::where('citadoE', 'Citado Entrevista')->count();
      $count1filtros['filtros']  = Filtro::where('noAplica', 'No Aplica')->count();
      $count2filtros['filtros']  = Filtro::where('noInteresado', 'no interesado')->count();
      $count3filtros['filtros']  = Filtro::where('enviadoCapa', 'enviado capa')->count();
      $count4filtros['filtros']  = Filtro::where('enviadoExm', 'enviado a exam')->count();
      $count5filtros['filtros']  = Filtro::where('PruebasE', 'Pruebas Eviadas')->count();
      $count6filtros['filtros']  = Filtro::where('yaTrabaja', 'Ya trabaja')->count();
      $count7filtros['filtros']  = Filtro::where('numeroEqu', 'Numero Equivocado')->count();
      $count8filtros['filtros']  = Filtro::where('id', '<>',null)->count();
      $count9filtros['filtros']  = Filtro::where('noAsiste', 'NoAsiste')->count();
      $count10filtros['filtros'] = Filtro::where('NoResponde2', 'NoResponde2')->count();
      $count11filtros['filtros'] = Filtro::where('YaNoint', 'YaNoint')->count();
      $count12filtros['filtros'] = Filtro::where('estudiante', 'estudiante')->count();
      $count13filtros['filtros'] = Filtro::where('noAsisteEnt', 'noAsisteEnt')->count();




      $count00Fuentes['filtros'] = Filtro::where('fuente', 'Vincucuentas')->count();
      $count01Fuentes['filtros'] = Filtro::where('fuente', 'Computrabajo')->count();
      $count02Fuentes['filtros'] = Filtro::where('fuente', 'SNE')->count();
      $count03Fuentes['filtros'] = Filtro::where('fuente', 'Compensar')->count();
      $count04Fuentes['filtros'] = Filtro::where('fuente', 'rt')->count();
      $count05Fuentes['filtros'] = Filtro::where('fuente', 'rj')->count();
      $count06Fuentes['filtros'] = Filtro::where('fuente', 'rc')->count();
      $count07Fuentes['filtros'] = Filtro::where('fuente', 'univ')->count();
      $count08Fuentes['filtros'] = Filtro::where('fuente', 'redes')->count();
      $count09Fuentes['filtros'] = Filtro::where('fuente', 'hv')->count();
      $count10Fuentes['filtros'] = Filtro::where('fuente', 'funda')->count();

      $capacitaciones= Capacitacion::orderBy('created_at', 'asc')->paginate(10);
      $capacitacionAps['capacitacion']= Capacitacion::where('estado','Aprobado')->count();
      $capacitacionNaps['capacitacion']= Capacitacion::where('estado','NO aprobado')->count();

      $residencias= Entrevista1::orderBy('created_at', 'asc')->paginate(10);
      $residencia1s['entrevista1s']= Entrevista1::where('residencia','Bogotá')->count();
      $residencia2s['entrevista1s']= Entrevista1::where('residencia','Aledaños')->count();


      return view('home' ,compact(
      'residencias',
        'residencia1s',
      'residencia2s',
      'capacitaciones',
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
      'dependencia'));
    }


}
