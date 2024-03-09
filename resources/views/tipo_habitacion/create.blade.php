<!-- @extends('layouts.app') -->


<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('tipo_habitacion.index') }}">REGRESAR</a>
<form method="post" action="{{ route('tipo_habitacion.store') }}" class="my-form">

    @csrf
    
    <label for="Id_Tipo_Habitacion">id numero de habitacion</label>
    <input type="text" name="Id_Tipo_Habitacion" id="Id_Tipo_Habitacion" >

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" id="Descripcion">

    <label for="Precio">Precio</label>
    <input type="decimal" name="Precio" id="Precio">

    <label for="Disponibilidad">Disponibilidad</label>
    <input type="text" name="Disponibilidad" id="Disponibilidad">

    

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>