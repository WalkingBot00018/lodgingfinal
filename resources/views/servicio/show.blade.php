@if ($servicio)
    <h1>Detalles de los servicios</h1>
    <p>Id del servicio: {{ $servicio->ID_Servicio }}</p>
    <p>Nombre del servicio: {{ $servicio->Nombre }}</p>
    <p>Descripcion: {{ $servicio->Descripcion }}</p>
    <p>Numero de habitacion: {{ $servicio->Nro_Habitacion }}</p>
    
    <a href="{{ route('servicio.index') }}">Volver al Listado</a>
@else
    <p>servicio no encontrado</p>
@endif