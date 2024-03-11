h1>Editar servicio</h1>
<form method="POST" action="{{ route('servicio.update', $servicio->ID_Servicio) }}">
    @csrf
    @method('PUT')
    <label for="ID_Servicio">Número de Reserva</label>
    <input type="text" name="ID_Servicio" value="{{ $servicio->ID_Servicio }}">

    <label for="Nombre">Nombre del servicio</label>
    <input type="text" name="Nombre" value="{{ $servicio->Nombre }}">

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{ $servicio->Descripcion }}">

    <label for="Nro_Habitacion">Numero habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $servicio->Nro_Habitacion }}">

    
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('servicio.show', $servicio->ID_Servicio) }}">Ver Detalles</a>