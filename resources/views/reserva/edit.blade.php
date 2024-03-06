h1>Editar Reserva</h1>
<form method="POST" action="{{ route('reserva.update', $reservas->Nro_Reserva) }}">
    @csrf
    @method('PUT')
    <label for="Nro_Reserva">Número de Reserva</label>
    <input type="text" name="Nro_Reserva" value="{{ $reservas->Nro_Reserva }}">

    <label for="Nro_doc">Numero de Documento</label>
    <input type="text" name="Nro_doc" value="{{ $reservas->Nro_doc }}">

    <label for="Nro_Habitacion">Numero habitacion</label>
    <input type="text" name="Nro_Habitacion" value="{{ $reservas->Nro_Habitacion }}">

    <label for="FechaEntrada">Fecha entrada</label>
    <input type="date" name="FechaEntrada" value="{{ $reservas->FechaEntrada }}">

    <label for="FechaSalida">Fecha salida</label>
    <input type="date" name="FechaSalida" value="{{ $reservas->FechaSalida }}">

    <label for="Estado_Reserva">Estado de la reserva</label>
    <input type="text" name="Estado_Reserva" value="{{ $reservas->Estado_Reserva }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('reserva.shows', $reservas->Nro_Reserva) }}">Ver Detalles</a>