<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function indice() {
        return '<h1>Estás en el índice!</h1>';
    }

    public function welcome() {
        return view('welcome');
    }

    public function saludoPersona($persona, $rol = null) {
        return view('saludoPersona', ['persona' => $persona, 'rol' => $rol]);
    }

    public function saludarVarios($personas) {
        return view('saludarVarios', ['personas' => explode('&', $personas)]);
    }
}
