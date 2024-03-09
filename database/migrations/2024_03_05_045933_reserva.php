<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('Nro_Reserva');
            $table->string('Nro_doc');
            $table->string('Nro_Habitacion');
            $table->date('FechaEntrada');
            $table->date('FechaSalida');
            $table->string('Estado_Reserva');
            $table->foreign('Nro_Habitacion')->references('Nro_Habitacion')->on('habitacion')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Nro_doc')->references('Nro_doc')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('reserva');
    }
};
