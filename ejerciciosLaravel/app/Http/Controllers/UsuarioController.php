<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrarDatos() {
        $usuarios = Usuario::all();

        return view('usuario', ['usuarios' => $usuarios]);
    }
}
