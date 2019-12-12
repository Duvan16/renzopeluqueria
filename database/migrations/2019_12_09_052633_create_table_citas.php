<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->bigInteger('estilista_id')->unsigned();
            $table->bigInteger('servicio_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->boolean('estado')->default(1);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('users');
            $table->foreign('estilista_id')->references('id')->on('users');
            $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
