<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\CargoNuevo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargoNuevoController extends Controller
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

        $cargoses = Cargo::orderBy('cargo', 'asc')->paginate(10);


        return view('cargoNuevo.index',compact('cargoses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::get();

        return view('cargoNuevo.create', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cargo $cargos)
    {


        $request->validate([
            'cargo'          => 'required|max:50|unique:cargo,cargo',

        ]);

        $cargos = new Cargo();

        $cargos->cargo          = $request ->cargo;
        $cargos->save();



        return redirect()->route('cargoNuevo.index')
            ->with('status_success','Cargo Guardado Satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CargoNuevo  $cargoNuevo
     * @return \Illuminate\Http\Response
     */
    public function show(CargoNuevo $cargoNuevo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CargoNuevo  $cargoNuevo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        //return   $permission_role;
        //return $role;


        $cargos=Cargo::findOrFail($id);


        return view('cargoNuevo.edit', compact('cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CargoNuevo  $cargoNuevo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;

        $datoscargos=request()->except(['_token','_method']);
        Cargo::where('id','=',$id)->update($datoscargos);
        $cargos=Cargo::findOrFail($id);

     //   return response()->json($contratacions);
     return view('cargoNuevo.edit',compact('cargos',));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CargoNuevo  $cargoNuevo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {

            Cargo::destroy($id);



            return redirect()->route('cargoNuevo.index')
            ->with('status_success','registro successfully removed');

        }
    }
}
