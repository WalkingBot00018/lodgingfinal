<h1>Editar Factura servicio</h1>
<form method="POST" action="{{ route('factuser.update', $factura_servicio->id) }}">

    @csrf
    @method('PUT')
    <label for="Nro_Factura">Numero De Factura</label>
    <input type="text" name="Nro_Factura" value="{{ $factura_servicio->Nro_Factura }}">

    <label for="ID_Servicio">ID Servicio</label>
    <input type="text" name="ID_Servicio" value="{{ $factura_servicio->ID_Servicio }}">

    <label for="Cantidad">Cantidad</label>
    <input type="date" name="Cantidad" value="{{ $factura_servicio->Cantidad }}">

    <button type="submit">Actualizar</button>
    <a href="{{ route('factuser.show', $tipo_habitacion->id) }}">Ver Detalles</a>
</form>