<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMembresiasTable extends Migration
{
    public function up()
    {
        Schema::create('membresias', function (Blueprint $table) {
            $table->id();
            $table->date('fechaexpedicion');
            $table->date('fechaexpiracion');
            $table->timestamps();
        });

        DB::table('membresias')->insert([
            'fechaexpedicion' => '2023-01-01',
            'fechaexpiracion' => '2029-12-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('membresias');
    }
}