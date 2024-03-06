@if ($reservas)
    <h1>Detalles de la Reserva</h1>
    <p>Numero de reserva: {{ $reservas->Nro_Reserva }}</p>
    <p>Numero de Documento: {{ $reservas->Nro_doc }}</p>
    <p>Numero de habitacion: {{ $reservas->Nro_Habitacion }}</p>
    <p>Fecha de entrada: {{ $reservas->FechaEntrada }}</p>
    <p>Fecha de salida: {{ $reservas->FechaSalida }}</p>  
    <p>Estado de la Reserva: {{ $reservas->Estado_Reserva }}</p> 
    <a href="{{ route('reserva.index') }}">Volver al Listado</a>
@else
    <p>reserva no encontrado</p>
@endif