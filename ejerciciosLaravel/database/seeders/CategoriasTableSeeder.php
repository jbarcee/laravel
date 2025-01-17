<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = new Categoria();
        $categoria->nombre = 'Categoria1';
        $categoria->activo=true;
        $categoria->descripcion = 'Descripcioooooon';
        $categoria->save();
    }
}
