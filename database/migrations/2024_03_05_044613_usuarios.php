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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('ID_Usuario');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Correo');
            $table->string('Contraseña');
            $table->string('Telefono');
            $table->string('Estado');
            $table->foreignId('ID_rol');

            $table->foreign('ID_rol')->references('ID_rol')->on('rol')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('usuarios');
    }
};
