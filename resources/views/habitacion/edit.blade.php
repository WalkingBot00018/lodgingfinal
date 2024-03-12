h1>Editar habitacion</h1>
<form method="POST" action="{{ route('habitacion.update', $habitacion->Nro_Habitacion) }}">
    @csrf
    @method('PUT')
    <label for="Nro_Habitacion">Número de Habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $habitacion->Nro_Habitacion }}">



    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('habitacion.shows', $habitacion->Nro_Habitacion) }}">Ver Detalles</a>