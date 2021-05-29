<?php

namespace App\Http\Controllers;

use App\verNovedades;
use App\Novedades;
use App\Filtro2;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VerNovedadesController extends Controller
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
        Carbon::setLocale('co');
        $date = Carbon::now();
        $novedades = Novedades::orderby('created_at', 'desc')->where('estado','=','activo')->paginate(10);
        return view('verNovedades.index',compact('novedades'));
    }
    public function searchverNovedades( Request $request)
    {
        $filtro = Novedades::all();

        $searchNovedad = $request->get('searchverNovedades');
        $novedades = Novedades::firstOrNew()->where('cedula', 'like', '%'.$searchNovedad.'%')->paginate(20);
        return view('verNovedades.index', ['novedades' => $novedades ]);
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
     * @param  \App\verNovedades  $verNovedades
     * @return \Illuminate\Http\Response
     */
    public function show(verNovedades $verNovedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\verNovedades  $verNovedades
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\verNovedades  $verNovedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, verNovedades $verNovedades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\verNovedades  $verNovedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(verNovedades $verNovedades)
    {
        //
    }
}
