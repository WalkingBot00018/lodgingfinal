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
        Schema::create('servicio', function (Blueprint $table) {
            $table->id('ID_Servicio');
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('Nro_Habitacion');
            $table->decimal('Precio', 10, 2);
            $table->foreign('Nro_Habitacion')->references('Nro_Habitacion')->on('habitacion')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('servicio');
    }
};
