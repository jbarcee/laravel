<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato_Pedido extends Model
{
    protected $table = 'plato_pedido';
    private $id_plato;
    private $id_pedido;
    protected $fillable = ['id_plato', 'id_pedido'];
}
