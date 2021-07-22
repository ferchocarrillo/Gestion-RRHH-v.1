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


Route::get('/searchRequisicion','RequisicionController@searchRequisicion');
Route::get('/searchusers','UserController@searchusers');
Route::get('/searchfiltro','FiltroController@searchfiltro');
Route::get('/searchCon','ContratacionController@searchCon');
Route::get('/searchCapacitacion','CapacitacionController@searchCapacitacion');
Route::get('/searchDocumento','DocumentoController@searchDocumento');
Route::get('/searchNovedades','NovedadesController@searchNovedades');
Route::get('/searchCoord','NovedadesController@searchCoord');
Route::get('/searchVerNovedades','NovedadesController@searchVerNovedades');
Route::get('/searchAsignaciones','AsignacionController@searchAsignaciones');
Route::get('/searchEntrevista1','EntrevistaCompletaController@searchEntrevista1');

Route::get('/charts', 'ChartController@index')->name('charts');
Route::post('/app/calculaTiempo', array('as' => 'calculaTiempo','edadController@calculaTiempo'));
Route::post('/app/Ciudades2', array('as' => 'Ciudad2', 'uses' => 'selects2Controller@Ciudad2'));
Route::post('/app/Ciudades', array('as' => 'Ciudad', 'uses' => 'selectsController@Ciudad'));
Route::post('/app/Ciudades3', array('as' => 'Ciudad3', 'uses' => 'selects3Controller@Ciudad3'));
Route::post('/app/Areas', array('as' => 'Area', 'uses' => 'AreaController@Area'));
Route::resource('requisicion',       RequisicionController::class);
Route::resource('reclutamiento',     ReclutamientoController::class);
Route::resource('filtro',            FiltroController::class);
Route::resource('entGerencia',       EntGerenciaController::class);
Route::resource('entJefe',           EntJefeController::class);
Route::resource('resumen',           ResumenController::class);
Route::resource('capacitacion',      CapacitacionController::class);
Route::resource('contratacion',      ContratacionController::class);
Route::resource('documento',         DocumentoController::class);
Route::resource('cargoNuevo',        CargoNuevoController::class);
Route::resource('novedades',         NovedadesController::class);
Route::resource('asignacion',        AsignacionController::class);
Route::resource('nuevoempleado',     NuevoEmpleadoController::class);
Route::resource('entrevistaFull',    EntrevistaFullController::class);
Route::resource('entRRHH',           EntRRHHController::class);
Route::resource('verNovedades',      verNovedadesController::class);
Route::resource('retiros',           RetirosController::class);

Route::resource('entrevistacompleta',EntrevistaCompletaController::class);



Route::get('/', 'PaginaController@inicio')->name('inicio');






