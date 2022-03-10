<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonajesApiController extends Controller
{
    public function personajes(){
        // -- consumir api Marvel
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];

        foreach ($datos['data']['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'descripcion' => $personaje['description'],
                'modificado' => $personaje['modified'],
                'imagen' => $personaje['thumbnail']['path'],
                'imagen_extension' => $personaje['thumbnail']['extension'],
                'comics_numero' => $personaje['comics']['available'],
            ];
        }

        return view('index',['personajes' => $personajes]);
    }

    public function detallePersonajes($id){

        // -- consumir detalles de personaje
        $cliente = new \GuzzleHttp\Client();    
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters/'.$id.'?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];

        foreach ($personajeIndividual['data']['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'descripcion' => $personaje['description'],
                'modificado' => $personaje['modified'],
                'imagen' => $personaje['thumbnail']['path'],
                'imagen_extension' => $personaje['thumbnail']['extension'],
                'comics_numero' => $personaje['comics']['available'],
            ];
        }
        return view('datalles',['personaje' => $personajeIndividual, 'personajes' => $personajes]);
    }
}
