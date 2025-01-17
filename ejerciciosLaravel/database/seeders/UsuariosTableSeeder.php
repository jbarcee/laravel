<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario1 = new Usuario();
        $usuario1->nombre = 'Jorge';
        $usuario1->email = 'Jorge@email.com';
        $usuario1->edad = 26;
        $usuario1->save();

        $usuario2 = new Usuario();
        $usuario2->nombre = 'PREUBA';
        $usuario2->email = 'PRUEBA@email.com';
        $usuario2->edad = 0;
        $usuario2->save();
    }
}
