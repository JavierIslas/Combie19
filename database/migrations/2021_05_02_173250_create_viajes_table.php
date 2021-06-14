<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('precio');
            $table->date('fecha');
            $table->timestamp('horario_Salida');
            $table->timestamp('horario_Llegada');
            $table->foreign('ruta_id')->references('id')->on('rutas');
            $table->bigInteger('asientos_disponibles');
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
        Schema::dropIfExists('viajes');
    }
}

