<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    /**
     * getMail
     * obtiene las variables para mandarlas a TestMail
     * y poder formular el correo a enviar
     */
    public function getMail(Request $datos){
        $Nombre = $datos -> name;
        $Correo = $datos -> email;
        $Mensaje = $datos -> message;
        $data = ['name' => $Nombre, 'email' => $Correo, 'sms' => $Mensaje];
        Mail::to('raziel.rosfo.1904@gmail.com')->send(new TestMail($data));
        return redirect('contacto');
    }
}
