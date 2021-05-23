<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('nombre',30);
            $table->string('apellido',40);
            $table->integer('telefono');
            $table->integer('cui');
            $table->integer('nit');
            $table->string('direccion',100);
            $table->string('sexo',20);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->integer('no_poliza');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
