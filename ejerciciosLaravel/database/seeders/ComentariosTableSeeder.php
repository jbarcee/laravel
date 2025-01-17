<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coment = new Comentario();
        $coment->pedidosId = 1;
        $coment->autor='hOLA';
        $coment->contenido='Hola';
        $coment->fecha='20/01/1999';
        $coment->save();
    }
}
