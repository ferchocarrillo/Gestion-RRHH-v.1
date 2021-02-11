<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();





Route::get('/test', function () {

    $user =User::find(2);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create');
});

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', ['except'=>[
    'create','store']])->names('user');



Route::get('requisicion-list-excel', 'requisicionController@exportExcel')->name('requisicion.excel');

Route::get('entrevista1-list-excel', 'Entrevista1Controller@exportExcel')->name('entrevista1.excel');
Route::get('entrevista2-list-excel', 'Entrevista2Controller@exportExcel')->name('entrevista2.excel');
Route::get('entrevista3-list-excel', 'Entrevista3Controller@exportExcel')->name('entrevista3.excel');
Route::get('entrevista4-list-excel', 'Entrevista4Controller@exportExcel')->name('entrevista4.excel');

Route::get('/search','RequisicionController@search');
Route::get('/searchusers','UserController@searchusers');
Route::get('/searchfiltro','EntrevistaController@searchfiltro');
Route::get('/searchEntrevista','Entrevista1Controller@searchEntrevista');
Route::get('/searchEntrevista2','Entrevista2Controller@searchEntrevista2');
Route::get('/searchEntrevista3','Entrevista3Controller@searchEntrevista3');
Route::get('/searchEntrevista4','Entrevista4Controller@searchEntrevista4');
Route::get('/searchEntrevista5','Entrevista5Controller@searchEntrevista5');
Route::get('/searchEntFinalizacion','EntFinalizacionController@searchEntFinalizacion');
Route::get('/searchcapacitacion','CapacitacionController@searchcapacitacion');
Route::get('/searchDocumento','DocumentoController@searchDocumento');
Route::get('/searchNovedades','NovedadesController@searchNovedades');
Route::get('/searchCoord','NovedadesController@searchCoord');

Route::get('graficas.graficarPorta', 'GraficasController@graficarPorta')->name('porta.grafica');
Route::get('/charts', 'ChartController@index')->name('charts');
Route::post('/app/calculaTiempo', array('as' => 'calculaTiempo','edadController@calculaTiempo'));
Route::post('/app/Ciudades2', array('as' => 'Ciudad2', 'uses' => 'selects2Controller@Ciudad2'));
Route::post('/app/Ciudades', array('as' => 'Ciudad', 'uses' => 'selectsController@Ciudad'));
Route::post('/app/Ciudades3', array('as' => 'Ciudad3', 'uses' => 'selects3Controller@Ciudad3'));
Route::post('/app/Areas', array('as' => 'Area', 'uses' => 'AreaController@Area'));
Route::resource('requisicion',      RequisicionController::class);
Route::resource('reclutamiento',    ReclutamientoController::class);
Route::resource('filtro',           FiltroController::class);
Route::resource('entrevista1',      Entrevista1Controller::class);
Route::resource('entrevista2',      Entrevista2Controller::class);
Route::resource('entrevista3',      Entrevista3Controller::class);
Route::resource('entrevista4',      Entrevista4Controller::class);
Route::resource('entrevista5',      Entrevista5Controller::class);
Route::resource('entFinalizacion',  EntFinalizacionController::class);
Route::resource('entGerencia',      EntGerenciaController::class);
Route::resource('entJefe',          EntJefeController::class);
Route::resource('resumen',          ResumenController::class);
Route::resource('capacitacion',     CapacitacionController::class);
Route::resource('contratacion',     ContratacionController::class);
Route::resource('documento',        DocumentoController::class);
Route::resource('cargoNuevo',       CargoNuevoController::class);
Route::resource('novedades',        NovedadesController::class);
Route::resource('asignacion',       AsignacionController::class);
Route::resource('nuevoempleado',    NuevoEmpleadoController::class);
Route::resource('entrevistaFull',   EntrevistaFullController::class);






Route::get('/', 'PaginaController@inicio')->name('inicio');






