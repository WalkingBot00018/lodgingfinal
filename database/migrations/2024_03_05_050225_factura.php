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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->string('Nro_Factura')->unique();
            $table->foreignId('Nro_Reserva');
            $table->date('FechaEmision');
            $table->decimal('Monto_Total', 10, 2);
            $table->foreignId('Id_Metodo_Pago');
            $table->foreign('Nro_Reserva')->references('Nro_Reserva')->on('reserva')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_metodo_pago')->references('Id_metodo_pago')->on('metodo_pago')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('factura');
    }
};
