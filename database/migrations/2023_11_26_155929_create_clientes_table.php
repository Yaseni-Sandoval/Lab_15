<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->date('fechanacimiento');
            $table->unsignedBigInteger('idmembresia');
            $table->timestamps();

            $table->foreign('idmembresia')->references('id')->on('membresias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}