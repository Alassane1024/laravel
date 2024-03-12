<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('couleur');
            $table->integer('nombre_de_place');
            $table->string('depart');
            $table->string('arriver');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus');
    }
}
