<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?apikey=4836337c443ff607ea200ffc08a55f3917e3a576');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];

        foreach ($datos['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'descripcion' => $personaje['description'],
                'modificado' => $personaje['modified'],
                'imagen' => $personaje['thumbnail'
                /* :{
                    'path' => $personaje['path'],
                    'extension' => $personaje['extension'],
                }, */
                ]
            ];
        }

        return view('index',['personajes' => $personajes]);
    }

    public function detallePersonaje($id){

        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters/'.$id.'?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=4836337c443ff607ea200ffc08a55f3917e3a576');
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];

        foreach ($datos['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'descripcion' => $personaje['description'],
                'modificado' => $personaje['modified'],
                'imagen' => $personaje['thumbnail'
                /* :{
                    'path' => $personaje['path'],
                    'extension' => $personaje['extension'],
                }, */
                ]
            ];
        }
        return view('detalles',['personaje' => $personajeIndividual, 'personajes' => $personajes]);
    }
}
