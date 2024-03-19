@if ($habitaciones)

    <h1>Room DETAILS</h1>
    <p>Numero de Habitacion: {{ $habitaciones->Nro_Habitacion }}</p>
    <p>Descripcion: {{ $habitaciones->Descripcion }}</p>
    <p>Precio: {{ $habitaciones->Precio }}</p>
    <p>Disponibilidad: {{ $habitaciones->Disponibilidad }}</p>

    <a href="{{ route('habitacion.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif
