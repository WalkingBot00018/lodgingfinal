@if ($habitaciones)
    <h1>Detalles de las habitaciones</h1>
    <p>Numero de reserva: {{ $habitaciones->Nro_Habitacion }}</p>
    <a href="{{ route('habitacion.index') }}">Volver al Listado</a>
@else
    <p>habitacion no encontrado</p>
@endif