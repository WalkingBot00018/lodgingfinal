@if ($factura)

    <h1>factura DETAlle</h1>
    <p>Numero de Factura: {{ $factura->Nro_Factura }}</p>

    <p>Numero de Reserva: {{ $factura->Nro_Reserva }}</p>

    <p>Fecha Emision: {{ $factura->FechaEmision }}</p>

    <p>Monto Total: {{ $factura->Monto_Total }}</p>

    <p>Id Metodo Pago: {{ $factura->Id_Metodo_Pago }}</p>

    
    <a href="{{ route('factu.index') }}">Volver al Listado</a>
@else
    <p>Rol no encontrado</p>
@endif