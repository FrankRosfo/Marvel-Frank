<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'http://gateway.marvel.com/v1/public/comics?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=4836337c443ff607ea200ffc08a55f3917e3a576');
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
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/'.$id);
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Generar número aleatorio entre 0 y 42
        $numero = rand(0, 42);

         // -- consumir api Rick and Morty
         $cliente = new \GuzzleHttp\Client();
         $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page='.$numero);
         $datos = json_decode($response->getBody()->getContents(), true);

         // -- Recorrer elementos
         $personajes = [];

         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                 'id' => $personaje['id'],
                 'nombre' => $personaje['name'],
                 'especie' => $personaje['species'],
                 'origen' => $personaje['origin']['name'],
                 'imagen' => $personaje['image'],
                 'estatus' => $personaje['status'],
                 'genero' => $personaje['gender']
             ];
         }

        return view('detalles',['personaje' => $personajeIndividual, 'personajes' => $personajes]);

    }
}
