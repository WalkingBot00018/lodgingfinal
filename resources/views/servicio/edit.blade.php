h1>Editar servicio</h1>
<form method="POST" action="{{ route('servicio.update', $servicios->ID_Servicio) }}">
    @csrf
    @method('PUT')
    <label for="ID_Servicio">Número de Reserva</label>
    <input type="text" name="ID_Servicio" value="{{ $servicios->ID_Servicio }}">

    <label for="Nombre">Nombre del servicio</label>
    <input type="text" name="Nombre" value="{{ $servicios->Nombre }}">

    <label for="Descripcion">Fecha entrada</label>
    <input type="text" name="Descripcion" value="{{ $servicios->Descripcion }}">

    <label for="Nro_Habitacion">Numero habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $servicios->Nro_Habitacion }}">

    
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('servicio.shows', $servicios->ID_Servicio) }}">Ver Detalles</a>