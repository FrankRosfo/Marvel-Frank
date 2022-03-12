<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsApiController extends Controller
{
    /**
     * Comics
     * consumir comics de API
     */
    public function comics($c_page){

        $numero = ($c_page * 10) - 10;

        // -- consumir comics
        $cliente = new \GuzzleHttp\Client();    
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/comics?limit=10&offset='.$numero.'ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $datos_comics = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $comics = [];
        $links = [];

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
        return view('comics.comics',['comics' => $comics, 'c_page' => $c_page]);
    }

    /**
     * Comics
     * consumir un comic de API atravez de ID
     */
    public function detalleComics($id){

        // -- consumir detalles de personaje
        $cliente = new \GuzzleHttp\Client();    
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters/'.$id.'?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $comicIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $comics = [];

        foreach ($pcomicIndividual['data']['results'] as $comic) {
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
        return view('comics.comic',['comic' => $comicIndividual, 'comics' => $comics]);
    }
}
