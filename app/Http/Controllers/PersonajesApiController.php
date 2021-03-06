<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;

class PersonajesApiController extends Controller
{
    /**
     * Personajes
     * Consumir Personajes de API
     */
    public function personajes($page){

        $numero = ($page * 10) - 10;

        // -- consumir api Marvel
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters?limit=10&offset='.$numero.'&ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
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
        return view('personajes.personajes',['personajes' => $personajes, 'page' => $page]);
    }
    
    /**
     * Personajes
     * consumir un personaje de API atravez de ID
     */
    public function detallePersonajes($id){

        $comentarios = comentarios::all();
        $num_coment = comentarios::count();

        // -- consumir detalles de personaje
        $cliente = new \GuzzleHttp\Client();    
        $response = $cliente->request('GET', 'https://gateway.marvel.com:443/v1/public/characters/'.$id.'?ts=1&apikey=06ffa280d1bafc06d930b43d6d8dd14b&hash=afda8720864a69268e1e8bedd7a23b60');
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

       /*  $personajes = []; */

        foreach ($personajeIndividual['data']['results'] as $personaje) {
            $personajes = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'descripcion' => $personaje['description'],
                'modificado' => $personaje['modified'],
                'imagen' => $personaje['thumbnail']['path'],
                'imagen_extension' => $personaje['thumbnail']['extension'],
                'comics_numero' => $personaje['comics']['available'],
            ];
        }
        return view('personajes.personaje',['personaje' => $personajes, 'comentarios' => $comentarios, 'registros' => $num_coment]);
    }

    /**
     * Comentar
     * Guarda el comentario en una BD
     */
    public function coment_personaje(Request $request){
        $comentarios = new comentarios();
        $comentarios->Nombre = $request->name;
        $comentarios->Comentario = $request->message;
        $comentarios->Decha = datetime('Y-m-d H:i:s');
        $comentarios->save();
        return redirect()->route('detalle.personaje');
    }
}
