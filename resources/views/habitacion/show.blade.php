@if ($habitaciones)

    <h1>Room DETAILS</h1>
    <p>Numero de Habitacion: {{ $habitaciones->Nro_Habitacion }}</p>
    
    <a href="{{ route('habitacion.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif
