<!-- @extends('layouts.app') -->


<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('servicio.index') }}">REGRESAR</a>
<form method="post" action="{{ route('servicio.store') }}" class="my-form">

    @csrf
    
    <label for="ID_Servicio">Id de servicio</label>
    <input type="text" name="ID_Servicio" id="ID_Servicio" >

    <label for="Nombre">Nombre del servicio</label>
    <input type="text" name="Nombre" id="Nombre">

    <label for="Descripcion">Descripcion del servicio</label>
    <input type="text" name="Descripcion" id="Descripcion" >

    <label for="Nro_Habitacion">Numero de la habitacion</label>
    <input type="text" name="Nro_Habitacion" id="Nro_Habitacion" >

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>