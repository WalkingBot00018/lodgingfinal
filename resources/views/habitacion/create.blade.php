<!-- @extends('layouts.app') -->


<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('habitacion.index') }}">REGRESAR</a>
<form method="post" action="{{ route('habitacion.store') }}" class="my-form">

    @csrf
    
    <label for="Nro_Habitacion">Número de habitacion</label>
    <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" >

    <label for="Id_Tipo_Habitacion">Id de tipo de habitacion</label>
    <input type="text" name="Id_Tipo_Habitacion" id="Id_Tipo_Habitacion">

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>