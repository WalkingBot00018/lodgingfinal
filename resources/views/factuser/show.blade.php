@if ($factura_servicio)

    <h1>factura servicio detalle</h1>
    <p>Numero de Factura: {{ $factura_servicio->Nro_Factura }}</p>

    <p>Numero de Reserva: {{ $factura_servicio->ID_Servicio }}</p>

    <p>Fecha Emision: {{ $factura_servicio->Cantidad }}</p>

    
    <a href="{{ route('facturaservicio.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif