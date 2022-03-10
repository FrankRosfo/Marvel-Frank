<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Raiz
     * return redirect()->route('inicio');
     */
    public function raiz(){
        return redirect()->route('inicio');
    }

    /**
     * Inicio
     * return view('inicio');
     */
    public function inicio(){
        return view('general.inicio');
    }

    /**
     * Contacto
     * return view('contacto');
     */
    public function contacto(){
        return view('general.contacto');
    }

    /**
     * Acerca
     * return view('Acerca');
     */
    public function acerca(){
        return view('general.acerca');
    }
}
