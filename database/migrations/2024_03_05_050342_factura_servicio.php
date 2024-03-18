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
        Schema::create('factura_servicio', function (Blueprint $table) {
            $table->id();
            $table->string('Nro_Factura');
            $table->foreignId('ID_Servicio');
            $table->integer('Cantidad');
            $table->foreign('Nro_Factura')->references('Nro_Factura')->on('factura')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ID_Servicio')->references('ID_Servicio')->on('servicio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('factura_servicio');
    }
};
