<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatosCliente;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public static function store($nombre, $telefono, $tarjetaCredito) {
        $cliente = Cliente::create([
            'nombre' => $nombre,
            'telefono' => $telefono,
            'tarjeta_credito' => $tarjetaCredito
        ]);
        return $cliente;
    }
}
