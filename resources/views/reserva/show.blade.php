@if ($reserva)
    <h1>Detalles de la Reserva</h1>
    <p>Numero de reserva: {{ $reserva->Nro_Reserva }}</p>
    <p>Numero de Documento: {{ $reserva->Nro_doc }}</p>
    <p>Numero de habitacion: {{ $reserva->Nro_Habitacion }}</p>
    <p>Fecha de entrada: {{ $reserva->FechaEntrada }}</p>
    <p>Fecha de salida: {{ $reserva->FechaSalida }}</p>  
    <p>Estado de la Reserva: {{ $reserva->Estado_Reserva }}</p> 
    <a href="{{ route('reserva.index') }}">Volver al Listado</a>
@else
    <p>reserva no encontrado</p>
@endif