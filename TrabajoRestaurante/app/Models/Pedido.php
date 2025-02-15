<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    private $id;
    private $precio_total;
    protected $fillable = ['precio_total'];
}
