<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Create
     * Envia a la ruta de registro
     */
    public function create(){
        return view('auth.registro');
    }

    /**
     * Guardar
     * Guarda en la BD el usuario y redirige a la ruta login
     */
    public function guardar(){
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('login');
    }
}
