<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsApiController extends Controller
{
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
        return view('comics.comics',['comics' => $comics]);
    }

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
                'thumbnail_path' => $comic['thumbnail']['path'],
                'thumbnail_extension' => $comic['thumbnail']['extension'],
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
