<?php

namespace App\Http\Controllers;

use App\nuevoEmpleado;
use Illuminate\Http\Request;
use App\Capacitacion;
use App\Contratacion;
use App\Filtro;
use App\JhonatanPermission\Models\Entrevista1;

class NuevoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevos = Contratacion::orderby('id_filtro', 'asc')->where('estado','=','activo')->paginate(10);
        return view('nuevoempleado.index',compact('nuevos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(nuevoEmpleado $nuevoEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id_filtro)

    {
        $filtro = Filtro::findOrFail($id_filtro);

        $nuevo= Entrevista1::findOrFail($id_filtro);

        return view('nuevoempleado.edit', compact('nuevo','filtro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nuevoEmpleado $nuevoEmpleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nuevoEmpleado  $nuevoEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(nuevoEmpleado $nuevoEmpleado)
    {
        //
    }
}
