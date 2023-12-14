<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('director');
            $table->string('genero');
            $table->string('artista1');
            $table->string('artista2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}