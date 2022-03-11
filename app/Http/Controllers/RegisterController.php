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
        $Contra = $datos -> password;
        $Conf_Contra = $datos -> conf_password;
        if($Conf_Contra != $Contra){
            return view('contac');
            /* $user = User::create(request(['name', 'email', 'password']));
            auth()->login($user);
            return redirect()->to('login'); */
        }
        else{
            return view('blog');
            /* $user = User::create(request(['name', 'email', 'password']));
            auth()->login($user);
            return redirect()->to('login'); */
        }
    }
}
