<h1>Editar Factura</h1>
<form method="POST" action="{{ route('factu.update', $factura->id) }}">

    @csrf
    @method('PUT')
    <label for="Nro_Factura">Numero De Factura</label>
    <input type="text" name="Nro_Factura" value="{{ $factura->Nro_Factura }}">

    <label for="Nro_Reserva">Numero de Raserva</label>
    <input type="text" name="Nro_Reserva" value="{{ $factura->Nro_Reserva }}">

    <label for="FechaEmision">Fecha Emision</label>
    <input type="date" name="FechaEmision" value="{{ $factura->FechaEmision }}">

    <label for="Monto_Total">Monto Total</label>
    <input type="text" name="Monto_Total" value="{{ $factura->Monto_Total }}">

    <label for="Id_Metodo_Pago">Id Metodo Pago</label>
    <input type="text" name="Id_Metodo_Pago" value="{{ $factura->Id_Metodo_Pago }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('factu.show', $tipo_habitacion->id) }}">Ver Detalles</a>
</form>