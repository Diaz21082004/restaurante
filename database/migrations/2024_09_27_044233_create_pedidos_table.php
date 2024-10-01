<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->onDelete('cascade'); // Relación con el menú
            $table->integer('cantidad'); // Cantidad de platos pedidos
            $table->decimal('subtotal', 10, 2); // Subtotal (precio * cantidad)
            $table->timestamps(); // Fecha de creación y actualización
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
