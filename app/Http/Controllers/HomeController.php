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
use App\Novedades;
use App\User;
use App\Reclutamiento;
use App\Filtro2;
use Carbon\Carbon;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

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

      $contarrequisiciones = Requisicion::sum('cantidad','<>', null);
    //   $contarrequisiciones['requisicions']=Requisicion::all()->collect($contarrequisiciones)->sum('cantidad');




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
      $campaetbs['filtros2'] = Filtro2::where('campaña', 'ETB')->count();
      $campamovistars['filtros2'] = Filtro2::where('campaña', 'Movistar')->count();
      $campaqnts['filtros2'] = Filtro2::where('campaña', 'QNT')->count();
      $campastaffs['filtros2'] = Filtro2::where('campaña', 'Staff Mentius')->count();
      $campavantis['filtros2'] = Filtro2::where('campaña', 'Vanti')->count();
      $campavantisacs['filtros2'] = Filtro2::where('campaña', 'Vanti S A C')->count();


$aproetbs['filtros2'] = Filtro2::where('campaña','=','ETB')->where('resultadoFormacion','=','Aprobado')->count();
$reproetbs['filtros2'] = Filtro2::where('campaña','=','ETB')->where('resultadoFormacion','=','No Aprobado')->count();
$apromovistars['filtros2'] = Filtro2::where('campaña','=','Movistar')->where('resultadoFormacion','=','Aprobado')->count();
$repromovistars['filtros2'] = Filtro2::where('campaña','=','Movistar')->where('resultadoFormacion','=','No Aprobado')->count();
$aproqnts ['filtros2'] = Filtro2::where('campaña','=','QNT')->where('resultadoFormacion','=','Aprobado')->count();
$reproqnts['filtros2'] = Filtro2::where('campaña','=','QNT')->where('resultadoFormacion','=','No Aprobado')->count();
$aprovantis ['filtros2'] = Filtro2::where('campaña','=','Vanti')->where('resultadoFormacion','=','Aprobado')->count();
$reprovantis['filtros2'] = Filtro2::where('campaña','=','Vanti')->where('resultadoFormacion','=','No Aprobado')->count();
$aprostaffs ['filtros2'] = Filtro2::where('campaña','=','Staff Mentius')->where('resultadoFormacion','=','Aprobado')->count();
$reprostaffs['filtros2'] = Filtro2::where('campaña','=','Staff Mentius')->where('resultadoFormacion','=','No Aprobado')->count();
$aprosacs ['filtros2'] = Filtro2::where('campaña','=','Vanti S A C')->where('resultadoFormacion','=','Aprobado')->count();
$reprosacs['filtros2'] = Filtro2::where('campaña','=','Vanti S A C')->where('resultadoFormacion','=','No Aprobado')->count();


      $date1 = $request->input('created_at');
//    $date->('created_at')->isSameMonth(now());

      $numeroCapacitacions ['filtros']= Filtro2::where('resultadoFormacion','<>',NULL)->count();

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



$edad1s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>=',0) ->Where('edad','<=',20)->count();
$edad2s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>=',20)->Where('edad','<=',25) ->count();
$edad3s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>=',25)->Where('edad','<=',30) ->count();
$edad4s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',30 )->Where('edad','<=',35) ->count();
$edad5s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',35 )->Where('edad','<=',40)->count();
$edad6s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',40 )->Where('edad','<=',45)->count();
$edad7s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',45 )->Where('edad','<=',50)->count();
$edad8s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',50 )->Where('edad','<=',55)->count();
$edad9s['filtros'] = Filtro2::where('estado','=','activo')->where('edad','>',55)->count();


$localidad1s ['filtros'] = Filtro2::where('estado','=','activo')->where('residencia','=','Bogotá')->count();
$localidad2s ['filtros'] = Filtro2::where('estado','=','activo')->where('residencia','=','Aledaños')->count();

$Usas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Usaquén')->count();
$Chapis['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Usaquén')->count();
$SantaFes['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Santa Fe')->count();
$SanCris['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','San Cristóbal')->count();
$Usmes['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Usme')->count();
$Tunjuelitos['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Tunjuelito')->count();
$Bosas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Bosa')->count();
$Kennedys['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Kennedy')->count();
$Fontibóns['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Fontibón')->count();
$Engativás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Engativá')->count();
$Subas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Suba')->count();
$BarriosUnidoss['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Barrios Unidos')->count();
$Teusaquillos['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Teusaquillo')->count();
$LosMártiress['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Los Mártires')->count();
$AntonioNariños['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Antonio Nariño')->count();
$PuenteArandas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Puente Aranda')->count();
$LaCandelarias['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','La Candelaria')->count();
$RafaelUribeUribes['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Rafael Uribe Uribe')->count();
$CiudadBolívars['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Ciudad Bolívar')->count();
$Sumapazs['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Sumapaz')->count();




$Soachas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Soacha')->count();
$Facatativás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Facatativá')->count();
$Chías['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Chía')->count();
$Zipaquirás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Zipaquirá')->count();
$Mosqueras['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Mosquera')->count();
$Madrids['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Madrid')->count();
$Funzas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Funza')->count();
$Cajicás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Cajicá')->count();
$Sibatés['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Sibaté')->count();
$Tocancipás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Tocancipá')->count();
$Tabios['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Tabio')->count();
$LaCaleras['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','La Calera')->count();
$Sopós['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Sopó')->count();
$Cotas['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Cota')->count();
$Tenjos['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Tenjo')->count();
$ElRosals['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','El Rosal')->count();
$Gachancipás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Gachancipá')->count();
$Bojacás['filtros']=Filtro2::where('estado','=','activo')->where('id_localidad','=','Bojacá')->count();



$hijos0s ['filtros']=Filtro2::where('estado','=','activo')->where('numhijos','=',NUll)->count();
$hijos1s ['filtros']=Filtro2::where('estado','=','activo')->where('numhijos','=',1)->count();
$hijos2s ['filtros']=Filtro2::where('estado','=','activo')->where('numhijos','=',2)->count();
$hijos3s ['filtros']=Filtro2::where('estado','=','activo')->where('numhijos','=',3)->count();
$hijos4s ['filtros']=Filtro2::where('estado','=','activo')->where('numhijos','>=',4)->count();

$ninos ['filtros']=Filtro2::where('estado','=','activo')->sum('hijosMas');
$ninas ['filtros']=Filtro2::where('estado','=','activo')->sum('hijosFem');


$novedades = Novedades::orderBy('created_at', 'asc')->paginate(10);


$novedadescampañases = Novedades::orderBy('campaña', 'asc')->where('estado','=','activo')->paginate(10);
$novedadesetbes ['novedades'] = Novedades::where('campaña', 'ETB')->where('estado','=','activo')->count();
$novedadesmovistares ['novedades'] = Novedades::where('campaña', 'Movistar')->where('estado','=','activo')->count();
$novedadesqntes ['novedades'] = Novedades::where('campaña', 'QNT')->where('estado','=','activo')->count();
$novedadesstaffes ['novedades'] = Novedades::where('campaña', 'Staff Mentius')->where('estado','=','activo')->count();
$novedadesvanties ['novedades'] = Novedades::where('campaña', 'Vanti')->where('estado','=','activo')->count();
$novedadesvantisaces ['novedades'] = Novedades::where('campaña', 'Vanti S A C')->where('estado','=','activo')->count();


$Aislamientos['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Aislamiento')->count();
$Calamidads['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Calamidad')->count();
$Capacitacións['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Capacitación')->count();
$CumplimientoDeMetas['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Cumplimiento De Meta')->count();
$Epss['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Eps')->count();
$Incapacidads['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Incapacidad')->count();
$Injustificadas['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Injustificada')->count();
$LicenciaDeLutos['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Licencia De Luto')->count();
$LicenciaDeMaternidads['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Licencia De Maternidad')->count();
$LicenciaNoRemuneradas['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Licencia No Remunerada')->count();
$NoReportas['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','No Reporta')->count();
$Permisos['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Permiso')->count();
$PosibleRenuncias['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Posible Renuncia')->count();
$ProblemasTécnicoss['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Problemas Técnicos')->count();
$SinConexións['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Sin Conexión')->count();
$Suspensións['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Suspensión')->count();
$Vacacioness['novedades'] = Novedades::where('estado','=','activo')->where('novedad','=','Vacaciones')->count();

$renuncias['filtros']=Filtro2::where('causalesR','=','Renuncia Voluntaria')->count();
$Abandonos['filtros']=Filtro2::where('causalesR','=','Abandono De Cargo')->count();
$conjustaCausas['filtros']=Filtro2::where('causalesR','=','Terminacion De Contrato Justa Causa')->count();
$MalasPracticass['filtros']=Filtro2::where('causalesR','=','Malas Practicas')->count();
$disciplinarios['filtros']=Filtro2::where('causalesR','=','Procesos Disciplinarios')->count();
$finetapas['filtros']=Filtro2::where('causalesR','=','Finalizacion Etapa Productiva Sena')->count();
$periodopruebas['filtros']=Filtro2::where('causalesR','=','Periodo De Prueba')->count();
$sinjustacasusas['filtros']=Filtro2::where('causalesR','=','Sin Justa Causa')->count();
$perioriodoabandonos['filtros']=Filtro2::where('causalesR','=','Periodo De Prueba Y Abandono De Cargo')->count();




      return view('home' ,compact(


'renuncias','Abandonos','conjustaCausas','MalasPracticass','disciplinarios','finetapas','periodopruebas','sinjustacasusas','perioriodoabandonos',


        'Aislamientos',
        'Calamidads',
        'Capacitacións',
        'CumplimientoDeMetas',
        'Epss',
        'Incapacidads',
        'Injustificadas',
        'LicenciaDeLutos',
        'LicenciaDeMaternidads',
        'LicenciaNoRemuneradas',
        'NoReportas',
        'Permisos',
        'PosibleRenuncias',
        'ProblemasTécnicoss',
        'SinConexións',
        'Suspensións',
        'Vacacioness',


        'novedadesetbes',
'novedadesmovistares',
'novedadesqntes',
'novedadesstaffes',
'novedadesvanties',
'novedadesvantisaces',


        'novedades',

        'ninos',
        'ninas',
        'hijos0s',
        'hijos1s',
        'hijos2s',
        'hijos3s',
        'hijos4s',
        'Usas',
        'Chapis',
        'SantaFes',
        'SanCris',
        'Usmes',
        'Tunjuelitos',
        'Bosas',
        'Kennedys',
        'Fontibóns',
        'Engativás',
        'Subas',
        'BarriosUnidoss',
        'Teusaquillos',
        'LosMártiress',
        'AntonioNariños',
        'PuenteArandas',
        'LaCandelarias',
        'RafaelUribeUribes',
        'CiudadBolívars',
        'Sumapazs',
        'Soachas',
        'Facatativás',
        'Chías',
        'Zipaquirás',
        'Mosqueras',
        'Madrids',
        'Funzas',
        'Cajicás',
        'Sibatés',
        'Tocancipás',
        'Tabios',
        'LaCaleras',
        'Sopós',
        'Cotas',
        'Tenjos',
        'ElRosals',
        'Gachancipás',
        'Bojacás',
        'localidad1s',
        'localidad2s',
        'edad1s',
        'edad2s',
        'edad3s',
        'edad4s',
        'edad5s',
        'edad6s',
        'edad7s',
        'edad8s',
        'edad9s',
        'numeroCapacitacions',
        'aproetbs',
        'reproetbs',
        'apromovistars',
        'repromovistars',
        'aproqnts',
        'reproqnts',
        'aprostaffs',
        'reprostaffs',
        'aprovantis',
        'reprovantis',
        'aprosacs',
        'reprosacs',
        'contarrequisiciones',
        'campaetbs',
        'campamovistars',
        'campaqnts',
        'campastaffs',
        'campavantis',
        'campavantisacs',
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
