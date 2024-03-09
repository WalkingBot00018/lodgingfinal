@if ($servicios)
    <h1>Detalles de los servicios</h1>
    <p>Id del servicio: {{ $servicios->ID_Servicio }}</p>
    <p>Nombre del servicio: {{ $servicios->Nombre }}</p>
    <p>Descripcion: {{ $servicios->Descripcion }}</p>
    <p>Numero de habitacion: {{ $reservas->Nro_Habitacion }}</p>
    
    <a href="{{ route('servicio.index') }}">Volver al Listado</a>
@else
    <p>servicio no encontrado</p>
@endif