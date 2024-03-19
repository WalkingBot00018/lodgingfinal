@extends('layouts.app')


<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('home.index') }}">REGRESAR</a>
<form method="post" action="{{ route('reserva.store') }}" class="my-form">

    @csrf

    <label for="Nro_doc">Numero de Documento</label>
    <input type="text" name="Nro_doc" id="Nro_doc">

    <label for="Nro_Habitacion">Numero habitacion</label>
    <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" >

    <label for="FechaEntrada">Fecha de entrada</label>
    <input type="date" name="FechaEntrada" id="FechaEntrada" >

    <label for="FechaSalida">Fecha salida</label>
    <input type="date" name="FechaSalida" id="FechaSalida">

    <label for="Estado_Reserva">Estado de Reserva</label>
    <input name="Estado_Reserva" id="Estado_Reserva" value="Reservado" hiddenX>
    <input type="submit" value="Create" class="btn btn-primary"/>

</form>
