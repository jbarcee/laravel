<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ped = new Pedido();
        $ped->usuarioId="1";
        $ped->fechaPedido="20/01/1999";
        $ped->estado="pendiente";
        $ped->save();

        
    }
}
