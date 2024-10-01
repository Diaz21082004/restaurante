<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained()->onDelete('cascade'); // Relación con pedidos
            $table->decimal('total', 10, 2); // Total de la factura
            $table->string('metodo_pago'); // Método de pago
            $table->dateTime('fecha_pago'); // Fecha y hora del pago
            $table->timestamps(); // Fecha de creación y actualización
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
