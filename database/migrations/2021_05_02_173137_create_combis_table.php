<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combis', function (Blueprint $table) {
            $table->id('id');
            $table->string('model');
            $table->string('patente', 8)->unique();
            $table->integer('asientos')->unsigned();
            $table->string('tipo');
            $table->bigInteger('chofer_id')->unsigned();
            $table->foreign('chofer_id')->references('id')->on('choferes');
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
        Schema::dropIfExists('combis');
    }
}
