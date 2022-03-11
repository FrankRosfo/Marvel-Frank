<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.registro');
    }

    public function guardar(Request $datos){
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('login');
    }
}
