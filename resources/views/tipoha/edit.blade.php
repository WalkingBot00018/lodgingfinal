<h1>Editar Tipo Habitacion</h1>
<form method="POST" action="{{ route('tipoha.update', $tipo_habitacion->id) }}">

    @csrf
    @method('PUT')
    <label for="Nro_Habitacion">Numero De Habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $tipo_habitacion->Nro_habitacion }}">

    <label for="Descripcion">Descripcion</label>
    <input type="text" name="Descripcion" value="{{ $tipo_habitacion->Descripcion }}">

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{ $tipo_habitacion->Precio }}">

    <label for="Disponibilidad">Disponibilidad</label>
    <input type="text" name="Disponibilidad" value="{{ $tipo_habitacion->Disponibilidad }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('tipoha.show', $tipo_habitacion->id) }}">Ver Detalles</a>
</form>