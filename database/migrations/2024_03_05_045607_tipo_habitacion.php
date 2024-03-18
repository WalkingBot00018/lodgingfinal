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
        Schema::create('tipo_habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('Nro_habitacion');
            $table->text('Descripcion');
            $table->decimal('Precio', 10, 2);
            $table->string('Disponibilidad');

            $table->timestamps();

            $table->foreign('Nro_habitacion')->references('Nro_habitacion')->on('habitacion')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_habitacion');
    }
};
