<h1>Editar  Habitacion</h1>
<form method="POST" action="{{ route('habitacion.update', $habitaciones->id) }}">

    @csrf
    @method('PUT')
    <label for="Nro_Habitacion">Numero De Habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $habitaciones->Nro_Habitacion }}">

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{ $habitaciones->Descripcion }}">

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{ $habitaciones->Precio }}">

    <label for="Disponibilidad">Disponibilidad</label>
    <input type="text" name="Disponibilidad" value="{{ $habitaciones->Disponibilidad }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('habitacion.show', $habitaciones->id) }}">Ver Detalles</a>
</form>
