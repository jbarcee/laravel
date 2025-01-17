<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public static function mostrarDatos() {
        $ejemplos = Ejemplo::all();

        return view('ejemplo', ['ejemplos' => $ejemplos]);
    }
}
