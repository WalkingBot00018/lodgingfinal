@if ($factura)
    <h1>Factura Detalle</h1>
    <p>Número de Factura: {{ $factura->Nro_Factura }}</p>
    <p>Fecha Emisión: {{ $factura->FechaEmision }}</p>
    <p>Monto Total: {{ $factura->Monto_Total }}</p>

    {{-- Calcular el IVA --}}
    @php
        $iva = $factura->Monto_Total * 0.16; // Suponiendo un IVA del 16%
        $totalConIVA = $factura->Monto_Total + $iva;
    @endphp

    <p>IVA (16%): {{ $iva }}</p>
    <p>Total con IVA: {{ $totalConIVA }}</p>

<<<<<<< HEAD
    <a href="{{ route('factu.index') }}">Volver al Listado</a>
=======
    
    <a href="{{ route('factura.index') }}">Volver al Listado</a>
>>>>>>> ramaRomario
@else
    <p>Factura no encontrada</p>
@endif
