<?php

namespace App\Http\Controllers;

use App\Retiros;
use Illuminate\Http\Request;
use App\nuevoEmpleado;
use App\CausasRetiro;

class RetirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function show(Retiros $retiros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $causas = CausasRetiro::all();
        $filtro =nuevoEmpleado::findOrFail($id);
        return view('retiros.edit', compact('filtro', 'causas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retiros $retiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retiros $retiros)
    {
        //
    }
}
