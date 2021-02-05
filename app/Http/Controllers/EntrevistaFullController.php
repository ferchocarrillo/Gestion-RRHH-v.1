<?php

namespace App\Http\Controllers;

use App\entrevistaFull;
use App\JhonatanPermission\Models\EntFinalizacion;
use App\JhonatanPermission\Models\Entrevista1;
use Illuminate\Http\Request;

class EntrevistaFullController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $finalizated = EntFinalizacion::all();
        $fulls = Entrevista1::orderBy('created_at', 'desc')->paginate(10);
        return view('entrevistaFull.index', compact('fulls', 'finalizated'));

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
     * @param  \App\entrevistaFull  $entrevistaFull
     * @return \Illuminate\Http\Response
     */
    public function show(entrevistaFull $entrevistaFull)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrevistaFull  $entrevistaFull
     * @return \Illuminate\Http\Response
     */
    public function edit(entrevistaFull $entrevistaFull)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrevistaFull  $entrevistaFull
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrevistaFull $entrevistaFull)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrevistaFull  $entrevistaFull
     * @return \Illuminate\Http\Response
     */
    public function destroy(entrevistaFull $entrevistaFull)
    {
        //
    }
}
