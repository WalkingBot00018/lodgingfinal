h1>Editar habitacion</h1>
<form method="POST" action="{{ route('tipo_habitacion.update', $tipo_habitacion->Id_Tipo_Habitacion) }}">
    @csrf
    @method('PUT')
    <label for="Id_Tipo_Habitacion">Id Tipo Habitacion</label>
    <input type="text" name="Id_Tipo_Habitacion" value="{{ $tipo_habitacion->Id_Tipo_Habitacion }}">

    <label for="Nro_Habitacion">Id Tipo Habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $tipo_habitacion->Nro_Habitacion }}">

    <label for="Descripcion">Id_Tipo_Habitacion</label>
    <input type="text" name="Descripcion" value="{{ $tipo_habitacion->Descripcion }}">

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{ $tipo_habitacion->Precio }}">

    <label for="Disponibilidad">Disponibilidad</label>
    <input type="text" name="Disponibilidad" value="{{ $tipo_habitacion->Disponibilidad }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('habitacion.show', $tipo_habitacion->Id_Tipo_Habitacion) }}">Ver Detalles</a>