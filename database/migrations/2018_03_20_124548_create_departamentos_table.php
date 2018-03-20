<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 50);
            $table->integer('pais_id')->unsigned();
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('paises');
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
