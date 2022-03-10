<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('blog.auth.login');
    }

    public function ingresar(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El usuario y/o contraseña son incorrectos'
            ]);
        }
        return redirect()->to('inicio');
    }
    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
