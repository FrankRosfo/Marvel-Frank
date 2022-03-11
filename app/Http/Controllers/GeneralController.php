<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Raiz
     * return redirect()->route('inicio');
     */
    public function raiz(){
        return redirect()->route('registro');
    }

    /**
     * inicio
     * consumir personajes de API para mostrar
     * en el inicio principal
     */
    public function inicio(){

        $numero = rand(0, 1497);

        // -- consumir api Marvel
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?limit=3&offset='.$numero.'&ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
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

    /**
     * buscar
     * consumir personajes de la API
     * relacionado a la busqueda
     */
    public function buscar(Request $dato){

        //Parametro a buscar
        $name = $dato -> q;

        // -- consumir api Marvel personajes
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?nameStartsWith='.$name.'&ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $datos_personajes = json_decode($response->getBody()->getContents(), true);

        // -- consumir api Marvel comics
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/comics?titleStartsWith='.$name.'&ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $datos_comics = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos personajes
        $personajes = [];

        // -- Recorrer elementos comics
        $comics = [];

        foreach ($datos_personajes['data']['results'] as $personaje) {
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

        foreach ($datos_comics['data']['results'] as $comic) {
            $comics[] = [
                'id' => $comic['id'],
                'titulo' => $comic['title'],
                'n_paginas' => $comic['pageCount'],
                'imagen' => $comic['thumbnail']['path'],
                'imagen_extension' => $comic['thumbnail']['extension'],
                'series_name' => $comic['series']['name'],
                'series_resourceURI' => $comic['series']['resourceURI']
            ];/* 
            foreach ($datos_comics['urls'] as $link) {
                $links[] = [
                    'type' => $link['type'],
                    'url' => $link['url']
                ];
            } */
        }
        return view('resultados',['personajes' => $personajes, 'comics' => $comics, 'name' => $name]);
    }
}
