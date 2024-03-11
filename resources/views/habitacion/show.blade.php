@if ($habitaciones)
    <h1>Detalles de las habitaciones</h1>
    <p>Numero de reserva: {{ $habitaciones->Nro_Habitacion }}</p>
    <p>Id Tipo de Habitacion: {{ $habitaciones->Id_Tipo_Habitacion }}</p>
    <a href="{{ route('habitacion.index') }}">Volver al Listado</a>
@else
    <p>habitacion no encontrado</p>
@endif