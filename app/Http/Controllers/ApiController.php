<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
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
                'thumbnail_path' => $personaje['thumbnail']['path'],
                'thumbnail_extension' => $personaje['thumbnail']['extension']
            ];
        }

        return view('index',['personajes' => $personajes]);
    }

    public function detallePersonaje($id){

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
                'thumbnail_path' => $personaje['thumbnail']['path'],
                'thumbnail_extension' => $personaje['thumbnail']['extension']
            ];
        }
        return view('detalles',['personaje' => $personajeIndividual, 'personajes' => $personajes]);
    }

    public function comics(){

        // -- consumir comics
        $cliente = new \GuzzleHttp\Client();    
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/comics?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $datos_comics = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $comics = [];
        $links = [];

        foreach ($datos_comics['data']['results'] as $comic) {
            $comics[] = [
                'id' => $comic['id'],
                'titulo' => $comic['title'],
                'n_paginas' => $comic['pageCount'],
                'thumbnail_path' => $comic['thumbnail']['path'],
                'thumbnail_extension' => $comic['thumbnail']['extension'],
                'link' => $comic['urls'] = [
                    $link[] = [
                        'type' => $comic['type'],
                        'url' => $comic['url']
                    ]
                ]
            ];
        }
        return view('index',['comics' => $comics]);
    }
}
