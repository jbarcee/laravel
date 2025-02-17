<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    private $id;
    private $id_cliente;
    private $precio_total;
    protected $fillable = ['precio_total', 'id_cliente'];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
