<?php

// database/migrations/YYYY_MM_DD_create_buses_table.php

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
            $table->integer('nombre_de_places');
            $table->string('depart');
            $table->string('arrivee');
            $table->decimal('frais_de_transport', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus');
    }
}
