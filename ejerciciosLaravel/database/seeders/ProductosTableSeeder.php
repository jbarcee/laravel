<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p = new Producto();
        $p->nombre = 'PedidoPrueba';
        $p->descripcion = 'Estoy aqui esperando';
        $p->precion = 2.89;
        $p->stock = 3;
        $p->save();
    }
}
