@if ($tipo_habitacion)
    <h1>Detalles de las habitaciones</h1>
    <p>Id Tipo de Habitacion: {{ $tipo_habitacion->Id_Tipo_Habitacion }}</p>
    <p>Descripcion: {{ $tipo_habitacion->Descripcion }}</p>
    <p>Precio: {{ $tipo_habitacion->Precio }}</p>
    <p>Disponibilidad: {{ $tipo_habitacion->Disponibilidad }}</p>
    <a href="{{ route('tipo_habitacion.index') }}">Volver al Listado</a>
@else
    <p>habitacion no encontrado</p>
@endif