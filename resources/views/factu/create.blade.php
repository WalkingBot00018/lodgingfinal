
<head>
    <a class="regresar" href="{{ asset('home') }}" >Regresar</a>
</head>
<form method="post" action="{{ url('factura/store') }}" class="my-form">
<link rel="stylesheet" href="{{ asset('css/factu/create.css') }}"> 

    @csrf
    <h3>CREAR FACTURA</h3>
    <div class="form-group">
        <label for="Nro_Factura">Numero de factura:</label>
        <input type="text" name="Nro_Factura" id="Nro_Factura" class="form-control"/>

        <label for="Nro_Reserva">Numero de Reserva:</label>
        <input type="text" name="Nro_Reserva" id="Nro_Reserva" class="form-control"/>

        <label for="FechaEmision">Fecha Emision:</label>
        <input type="date" name="FechaEmision" id="FechaEmision" class="form-control"/>

        <label for="Monto_Total">Monto Total:</label>
        <input type="text" name="Monto_Total" id="Monto_Total" class="form-control"/>

        <label for="Id_Metodo_Pago">Id Metodo Pago:</label>
        <input type="text" name="Id_Metodo_Pago" id="Id_Metodo_Pago" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>