<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDescripcionNullableInMenusTable extends Migration
{
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->text('descripcion')->nullable()->change();  // Permitir valores nulos
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->text('descripcion')->nullable(false)->change();  // Revertir cambio
        });
    }
}
