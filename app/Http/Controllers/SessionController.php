<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    /**
     * Create
     * Redirige a la vista de login
     * view auth.login
     */
    public function create(){
        return view('auth.login');
    }

    /**
     * Ingresar
     * Valida el usuario y redirige a la ruta de inicio
     */
    public function ingresar(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El usuario y/o contraseña son incorrectos'
            ]);
        }
        return redirect()->to('inicio');
    }
    
    /**
     * destroy
     * Cierra la secion actual
     */
    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
