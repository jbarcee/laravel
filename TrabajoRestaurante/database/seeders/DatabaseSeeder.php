<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use App\Models\EmpresaDelivery;
use App\Models\Plato;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::factory(10)->create();
        EmpresaDelivery::factory(10)->create();
        Plato::factory(20)->create();

        
    }
}
