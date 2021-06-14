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
            $table->bigInteger('origen')->unsigned();
            $table->bigInteger('destino')->unsigned();
            $table->bigInteger('combie_id')->unsigned();
            $table->foreign('origen')->references('id')->on('lugares');
            $table->foreign('destino')->references('id')->on('lugares');
            $table->foreign('combie_id')->references('id')->on('combis');
            $table->time('duracion');
            $table->double('distancia');
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
