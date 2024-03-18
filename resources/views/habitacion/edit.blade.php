<h1>Editar  Habitacion</h1>
<form method="POST" action="{{ route('habitacion.update', $habitaciones->id) }}">

    @csrf
    @method('PUT')
    <label for="Nro_Habitacion">Numero De Habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $habitaciones->Nro_Habitacion }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('habitacion.show', $habitaciones->id) }}">Ver Detalles</a>
</form>
