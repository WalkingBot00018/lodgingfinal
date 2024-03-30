@if ($tipo_habitacion)

    <h1>Type Room DETAILS</h1>
    <p>Numero de Habitacion: {{ $tipo_habitacion->Nro_habitacion }}</p>

    <p>Descripcion: {{ $tipo_habitacion->Descripcion }}</p>

    <p>Precio: {{ $tipo_habitacion->Precio }}</p>

    <p>Disponibilidad: {{ $tipo_habitacion->Disponibilidad }}</p>

    
    <a href="{{ route('tipo_habitacion.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif