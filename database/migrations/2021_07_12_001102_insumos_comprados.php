<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsumosComprados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumosComprados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('insumo_id')->unsigned();
            $table->bigInteger('viaje_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('viaje_id')->references('id')->on('viajes');
            $table->foreign('insumo_id')->references('id')->on('insumos');
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
         Schema::dropIfExists('insumosComprados');
    }
}
