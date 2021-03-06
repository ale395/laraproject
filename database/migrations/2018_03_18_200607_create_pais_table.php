<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{

    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paises');
    }
}
