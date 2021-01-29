<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }


    public function nosotros()
    {
        return view('nosotros');
    }


    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
