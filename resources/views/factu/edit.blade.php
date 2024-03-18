


<link rel="stylesheet" href="{{ asset('css/factu/edit.css') }}"> 
<head>
    <a class="regresar" href="{{ asset('home') }}" >Regresar</a>
</head>

<form method="POST" action="{{ route('factu.update', $factura->id) }}" class="my-form">
    @csrf
    @method('PUT')
    <h3>Editar Factura</h3>
    <div class="form-group">
        <label for="Nro_Factura">Numero De Factura</label>
        <input type="text" name="Nro_Factura" value="{{ $factura->Nro_Factura }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="Nro_Reserva">Numero de Reserva</label>
        <input type="text" name="Nro_Reserva" value="{{ $factura->Nro_Reserva }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="FechaEmision">Fecha Emision</label>
        <input type="date" name="FechaEmision" value="{{ $factura->FechaEmision }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="Monto_Total">Monto Total</label>
        <input type="text" name="Monto_Total" value="{{ $factura->Monto_Total }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="Id_Metodo_Pago">Id Metodo Pago</label>
        <input type="text" name="Id_Metodo_Pago" value="{{ $factura->Id_Metodo_Pago }}" class="form-control">
    </div>

    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a href="{{ route('factu.show', $factura->id) }}">Ver Detalles</a>
</form>
