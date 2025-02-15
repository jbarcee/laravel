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
            $table->integer('id_plato');
            $table->integer('id_pedido');
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
