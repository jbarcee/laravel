<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plato_pedido', function (Blueprint $table) {
            $table->foreignId('id_plato')->constrained('platos');
            $table->foreignId('id_pedido')->constrained('pedidos');
            $table->timestamps();
            $table->primary(['id_plato', 'id_pedido']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plato_pedido');
    }
};
