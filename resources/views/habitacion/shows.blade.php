@if ($habitacion)
    <h1>Detalles de las habitaciones</h1>
    <p>Numero de reserva: {{ $habitacion->Nro_Habitacion }}</p>
    <p>Id Tipo de Habitacion: {{ $habitacion->Id_Tipo_Habitacion }}</p>
    <a href="{{ route('habitacion.index') }}">Volver al Listado</a>
@else
    <p>habitacion no encontrado</p>
@endif