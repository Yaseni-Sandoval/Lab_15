<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentasTable extends Migration
{
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->id();
            $table->date('fecharegistro');
            $table->date('fechadevolucion');
            $table->date('fechaentrega');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idpelicula');
            $table->timestamps();

            $table->foreign('idcliente')->references('id')->on('clientes');
            $table->foreign('idpelicula')->references('id')->on('peliculas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentas');
    }
}
