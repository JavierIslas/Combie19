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
            $table->time('horario_Salida');
            $table->time('horario_Llegada');
            $table->bigInteger('ruta_id')->unsigned();
            $table->foreign('ruta_id')->references('id')->on('rutas');
            $table->bigInteger('asientos_disponibles');
            $table->timestamps();
            $table->bigInteger('chofer_id')->unsigned();
            $table->foreign('chofer_id')->references('id')->on('choferes');
            
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

