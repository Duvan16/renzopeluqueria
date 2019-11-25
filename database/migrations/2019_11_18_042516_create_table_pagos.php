<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('valor');
            $table->timestamp('fecha')->nullable();
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('estilista_id')->unsigned();
            $table->timestamps();

            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->foreign('estilista_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
