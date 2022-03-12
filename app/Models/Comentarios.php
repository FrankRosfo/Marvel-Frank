<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected $table = "comentarios";
    protected $primaryKey = "id_comentario";
    protected $fillable = ['Nombre', 'Comentario', 'Fecha'];
}
