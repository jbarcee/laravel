<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    private $id;
    private $pedidosId;
    private $autor;
    private $contenido;
    private $fecha;
}
