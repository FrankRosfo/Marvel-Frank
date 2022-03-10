<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $Nombre;
    public $Correo;
    public $Mensaje;

    public function __construct($data)
    {
        $this->data = $data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('frank.pruebas.0402@gmail.com'), env('MAIL_FROM_NAME'))
                    ->view('blog/testmail')
                    ->subject('Blog-A/F')
                    ->with($this->data);
    }
}