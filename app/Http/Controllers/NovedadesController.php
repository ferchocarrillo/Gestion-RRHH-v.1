<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Novedades;
use Illuminate\Http\Request;
use App\Contratacion;
use Dotenv\Result\Success;


class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $activos = Asignacion::orderBy('created_at', 'desc')->paginate(10);
        return view('novedades.index',compact('activos'));
    }





    public function searchNovedades( Request $request)

    {   
        $activos = Asignacion::all();

        $searchNovedades = $request->get('searchNovedades');
        $activos= Asignacion::firstOrNew()->where('cedula', 'like', '%'.$searchNovedades.'%')->paginate(30);
        $novedades = Novedades::where('Id_filtro', '=', $activos->id)->get();

        return Asignacion::make('otra.novedad')
        ->with('asignacion', $activos)
        ->with('novedades', $novedades);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $novedades = Novedades::all();
        $activos = Contratacion::all();
        
        return view('novedades.create', compact('novedades','activos'));
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
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function show(Novedades $novedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Novedades $novedades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedades $novedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedades $novedades)
    {
        //
    }
}
