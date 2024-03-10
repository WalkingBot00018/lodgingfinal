<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Factura</title>
</head>
<body>
    <a href="{{ url('factura')}}">Regresar</a>
    <h1>Detalles de Factura</h1>
    <p>Número de factura: {{ $verFactura->Nro_Factura }}</p>
    <p>Numero de reserva: {{ $verFactura->Nro_Reserva }}</p>
    <p>Fecha de emision: {{ $verFactura->FechaEmision }}</p>
    <p>Total: {{ $verFactura->Monto_Total }}</p>
    <p>Id metodo de pago: {{$verFactura->Id_Metodo_Pago}}</p>
    
</body>
</html>